(function () {
    function slugify(value) {
        return String(value || '')
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
    }

    function initializeSlugSync() {
        var titleInput = document.getElementById('category_title');
        var urlInput = document.getElementById('url');

        if (!titleInput || !urlInput) {
            return;
        }

        var isUrlManuallyEdited = false;

        urlInput.addEventListener('input', function () {
            var currentSlug = slugify(titleInput.value);
            isUrlManuallyEdited = urlInput.value.trim() !== '' && urlInput.value !== currentSlug;
        });

        titleInput.addEventListener('input', function () {
            if (isUrlManuallyEdited) {
                return;
            }

            urlInput.value = slugify(titleInput.value);
        });
    }

    function createPreviewCard(options) {
        var card = document.createElement('div');
        card.className = 'category-image-card';

        var previewImage = document.createElement('img');
        previewImage.alt = options.name;
        previewImage.src = options.src;

        var removeButton = document.createElement('button');
        removeButton.type = 'button';
        removeButton.className = 'category-image-remove';
        removeButton.setAttribute('aria-label', 'Remove image');
        removeButton.innerHTML = '&times;';

        var cardBody = document.createElement('div');
        cardBody.className = 'category-image-card-body';
        cardBody.textContent = options.name;

        card.appendChild(previewImage);
        card.appendChild(removeButton);
        card.appendChild(cardBody);

        return {
            card: card,
            removeButton: removeButton,
        };
    }

    function syncInputFiles(fileInput, selectedFiles) {
        var dataTransfer = new DataTransfer();

        selectedFiles.forEach(function (file) {
            dataTransfer.items.add(file);
        });

        fileInput.files = dataTransfer.files;
    }

    function renderState(state) {
        state.previewGrid.innerHTML = '';
        state.removedImagesContainer.innerHTML = '';

        state.removedExistingImages.forEach(function (imageName) {
            var hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'removed_images[]';
            hiddenInput.value = imageName;
            state.removedImagesContainer.appendChild(hiddenInput);
        });

        state.existingImages
            .filter(function (imageName) {
                return state.removedExistingImages.indexOf(imageName) === -1;
            })
            .forEach(function (imageName) {
                var preview = createPreviewCard({
                    name: imageName,
                    src: state.previewBaseUrl + '/' + imageName,
                });

                preview.removeButton.addEventListener('click', function () {
                    state.removedExistingImages.push(imageName);
                    renderState(state);
                });

                state.previewGrid.appendChild(preview.card);
            });

        state.newFiles.forEach(function (file, index) {
            var preview = createPreviewCard({
                name: file.name,
                src: URL.createObjectURL(file),
            });

            preview.removeButton.addEventListener('click', function () {
                state.newFiles.splice(index, 1);
                syncInputFiles(state.fileInput, state.newFiles);
                renderState(state);
            });

            preview.card.querySelector('img').addEventListener('load', function (event) {
                URL.revokeObjectURL(event.target.src);
            }, { once: true });

            state.previewGrid.appendChild(preview.card);
        });

        if (!state.previewGrid.children.length) {
            var emptyState = document.createElement('div');
            emptyState.className = 'category-image-empty';
            emptyState.textContent = 'No images selected';
            state.previewGrid.appendChild(emptyState);
        }
    }

    function initializeImageManager(manager) {
        var fileInput = manager.parentElement.querySelector('.category-image-input');

        if (!fileInput) {
            return;
        }

        var existingImages = [];

        try {
            existingImages = JSON.parse(manager.dataset.existingImages || '[]');
        } catch (error) {
            existingImages = [];
        }

        var state = {
            fileInput: fileInput,
            previewGrid: manager.querySelector('.category-image-grid'),
            removedImagesContainer: manager.querySelector('.category-removed-images'),
            existingImages: existingImages,
            removedExistingImages: [],
            newFiles: [],
            previewBaseUrl: manager.dataset.previewBaseUrl || '',
        };

        fileInput.addEventListener('change', function (event) {
            Array.prototype.forEach.call(event.target.files, function (file) {
                var alreadyAdded = state.newFiles.some(function (existingFile) {
                    return existingFile.name === file.name
                        && existingFile.size === file.size
                        && existingFile.lastModified === file.lastModified;
                });

                if (!alreadyAdded) {
                    state.newFiles.push(file);
                }
            });

            syncInputFiles(fileInput, state.newFiles);
            renderState(state);
        });

        renderState(state);
    }

    document.addEventListener('DOMContentLoaded', function () {
        initializeSlugSync();
        document.querySelectorAll('.category-image-manager').forEach(initializeImageManager);
    });
}());