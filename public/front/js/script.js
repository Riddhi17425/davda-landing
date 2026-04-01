// Initialize Lucide Icons
lucide.createIcons();

// Register ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

// Mobile Menu Toggle
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const header = document.getElementById('main-header');

menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('active');
    const icon = mobileMenu.classList.contains('active') ? 'x' : 'menu';
    menuToggle.innerHTML = `<i data-lucide="${icon}"></i>`;
    lucide.createIcons();
});

// Close menu on link click
document.querySelectorAll('.mobile-nav-link').forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        menuToggle.innerHTML = `<i data-lucide="menu"></i>`;
        lucide.createIcons();
    });
});

// Header Scroll Effect
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});



const projectCards = document.querySelectorAll('.project-card');
let currentIndex = 0;
let autoPlayTimer;

function setActiveCard(index) {
    currentIndex = index; // Keep track of which one is active
    const activeCard = projectCards[index];

    projectCards.forEach((card, i) => {
        const content = card.querySelector('.project-content');
        const category = card.querySelector('.project-cat');

        if (i === index) {
            card.classList.add('active');
            card.style.flex = '2.5';
            if (content) content.style.color = '#ffffff';
            if (category) {
                category.style.opacity = '1';
                category.style.color = 'rgba(255,255,255,0.8)';
            }
        } else {
            card.classList.remove('active');
            card.style.flex = '0.5';
            if (content) content.style.color = '#111111';
            if (category) {
                category.style.opacity = '0.6';
                category.style.color = 'inherit';
            }
        }
    });
}

// Function to move to the next card
function nextCard() {
    currentIndex++;
    if (currentIndex >= projectCards.length) {
        currentIndex = 0; // Reset to first card
    }
    setActiveCard(currentIndex);
}

// Timer management
function startAutoPlay() {
    stopAutoPlay(); // Clear any existing timer first
    autoPlayTimer = setInterval(nextCard, 5000); // 5000ms = 5 seconds
}

function stopAutoPlay() {
    clearInterval(autoPlayTimer);
}

// 1. Initialize
if (projectCards.length > 0) {
    setActiveCard(0);
    startAutoPlay();
}

// 2. Event Listeners
projectCards.forEach((card, index) => {
    card.addEventListener('mouseenter', () => {
        stopAutoPlay(); // Stop sliding when user hovers
        setActiveCard(index);
    });

    card.addEventListener('mouseleave', () => {
        startAutoPlay(); // Resume sliding when user leaves
    });
});

// Projects Scroll Animations (Mobile)
gsap.utils.toArray('.mobile-project-card').forEach((card, i) => {
    gsap.to(card, {
        opacity: 1,
        y: 0,
        duration: 0.6,
        delay: i * 0.1,
        scrollTrigger: {
            trigger: card,
            start: "top 85%",
            toggleActions: "play none none reverse"
        }
    });
});


// // FIXED: Changed to match your HTML id "amenity-grid" instead of "amenities-grid"
// const filterSelect = document.getElementById('amenity-filter');
// const amenityGrid = document.getElementById('amenity-grid');
// const statCount = document.getElementById('stat-count');
// const statLabel = document.getElementById('stat-label');
// const statSize = document.getElementById('stat-size');

// // Amenity Data for Dynamic Filtering
// const amenityData = {
//     all: {
//         count: "40+",
//         label: "AMENITIES",
//         size: "5",
//         items: [
//             { title: "Swimming Pool & Deck", img: "https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?w=800&q=80", size: "large" },
//             { title: "Clubhouse Restaurant", img: "https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=600&q=80", size: "" },
//             { title: "Community Hall", img: "https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?w=600&q=80", size: "" },
//             { title: "Outdoor Sports", img: "https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800&q=80", size: "" },
//             { title: "Indoor Games", img: "https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=600&q=80", size: "" },
//         ]
//     },
//     // Add other categories as needed, updating items to match your HTML structure
//     wellness: {
//         count: "12",
//         label: "WELLNESS & SPA",
//         size: "2",
//         items: [
//             { title: "Swimming Pool & Deck", img: "https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?w=800&q=80", size: "large" },
//             { title: "Clubhouse Restaurant", img: "https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=600&q=80", size: "" },
//             { title: "Community Hall", img: "https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?w=600&q=80", size: "" },
//             { title: "Outdoor Sports", img: "https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800&q=80", size: "" },
//             { title: "Indoor Games", img: "https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=600&q=80", size: "" },
//         ]
//     },
//     sports: {
//         count: "15",
//         label: "SPORTS COURTS",
//         size: "3",
//         items: [
//             { title: "Swimming Pool & Deck", img: "https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?w=800&q=80", size: "large" },
//             { title: "Clubhouse Restaurant", img: "https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=600&q=80", size: "" },

//         ]
//     },
//     leisure: {
//         count: "10+",
//         label: "LEISURE SPOTS",
//         size: "4",
//         items: [
//             { title: "Swimming Pool & Deck", img: "https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?w=800&q=80", size: "large" },

//         ]
//     }
// };

// // Function to load amenities
// function loadAmenities(category) {
//     const data = amenityData[category];

//     amenityGrid.innerHTML = data.items.map(item => `
//         <div class="grid-item ${item.size}">
//             <img src="${item.img}" alt="${item.title}">
//             <div class="step_info">                
//                 <p class="step_info_p">${item.title}</p>
//             </div>
//         </div>
//     `).join('');

//     // Update Stats
//     if (statCount) statCount.textContent = data.count;
//     if (statLabel) statLabel.textContent = data.label;
//     if (statSize) statSize.textContent = data.size;

//     // Re-init Lucide icons if available
//     if (typeof lucide !== 'undefined') {
//         lucide.createIcons();
//     }

//     // Fade in animation with GSAP if available
//     if (typeof gsap !== 'undefined') {
//         gsap.to(amenityGrid.children, {
//             opacity: 1,
//             y: 0,
//             duration: 0.5,
//             stagger: 0.1
//         });
//     }
// }

// // Initialize with "all" category on page load
// if (amenityGrid) {
//     loadAmenities('all');
// }

// // Filter change handler
// if (filterSelect && amenityGrid) {
//     filterSelect.addEventListener('change', (e) => {
//         const category = e.target.value;

//         // Fade out current grid if GSAP is available
//         if (typeof gsap !== 'undefined') {
//             gsap.to(amenityGrid.children, {
//                 opacity: 0,
//                 y: 20,
//                 duration: 0.3,
//                 stagger: 0.05,
//                 onComplete: () => {
//                     loadAmenities(category);
//                 }
//             });
//         } else {
//             // Load immediately if GSAP not available
//             loadAmenities(category);
//         }
//     });
// }

// // Manifesto Animations (only if elements exist)
// if (typeof gsap !== 'undefined') {
//     const statCards = document.querySelectorAll('.stat-card');
//     if (statCards.length > 0) {
//         gsap.utils.toArray('.stat-card').forEach((card, i) => {
//             gsap.to(card, {
//                 opacity: 1,
//                 y: 0,
//                 duration: 0.5,
//                 delay: i * 0.1,
//                 scrollTrigger: {
//                     trigger: '.stats-grid',
//                     start: "top 80%"
//                 }
//             });
//         });
//     }

//     const valueCards = document.querySelectorAll('.value-card');
//     if (valueCards.length > 0) {
//         gsap.utils.toArray('.value-card').forEach((card, i) => {
//             gsap.to(card, {
//                 opacity: 1,
//                 y: 0,
//                 duration: 0.5,
//                 delay: i * 0.15,
//                 scrollTrigger: {
//                     trigger: '.values-grid',
//                     start: "top 80%"
//                 }
//             });
//         });
//     }

//     // Lifestyle Animations for bento-grid (if exists)
//     const bentoGrid = document.querySelector('.bento-grid');
//     if (bentoGrid) {
//         gsap.utils.toArray('.bento-grid .amenity-card').forEach((card, i) => {
//             gsap.to(card, {
//                 opacity: 1,
//                 y: 0,
//                 duration: 0.5,
//                 delay: i * 0.05,
//                 scrollTrigger: {
//                     trigger: '.bento-grid',
//                     start: "top 80%"
//                 }
//             });
//         });
//     }
// }



// drager js
// image divider
const newImage = document.querySelector('.new');
const divider = document.querySelector('.divider');
const container = document.querySelector('.slider');

function move(e) {
    // Get horizontal position from either Mouse or Touch event
    let clientX;
    if (e.type === 'touchstart' || e.type === 'touchmove') {
        clientX = e.touches[0].clientX;
    } else {
        clientX = e.clientX;
    }

    const rect = container.getBoundingClientRect();
    const x = clientX - rect.left;
    const containerWidth = container.offsetWidth;

    // Constrain x within the container boundaries
    const positionX = Math.max(0, Math.min(x, containerWidth));
    const percentage = (positionX / containerWidth) * 100;

    // Update styles
    divider.style.left = `${positionX}px`;
    newImage.style.clipPath = `inset(0 ${100 - percentage}% 0 0)`;
}

// Mouse Events
container.addEventListener('mousemove', move);

// Touch Events
container.addEventListener('touchstart', move);
container.addEventListener('touchmove', (e) => {
    move(e);
    e.preventDefault(); // Prevents the page from scrolling while sliding
}, { passive: false });
// image divider

// Mobile slider toggle functionality
document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('toggle-btn');
    const mobileImg = document.getElementById('mobile-img');

    if (toggleBtn && mobileImg) {
        let isNew = true; // Start with "new" image

        toggleBtn.addEventListener('click', function () {
            if (isNew) {
                mobileImg.src = 'images/dragger-old.png';
                mobileImg.alt = 'slider-2';
            } else {
                mobileImg.src = 'images/dragger-new.png';
                mobileImg.alt = 'slider-1';
            }
            isNew = !isNew;
        });
    }
});
// mobile toggleer for dragger

// --- Custom Dropdown Logic ---
const trigger = document.getElementById('amenityTrigger');
const options = document.getElementById('amenityOptions');
const currentText = trigger.querySelector('.current-val');

function toggleDropdown() {
    options.classList.toggle('show');
    trigger.classList.toggle('active');
}

/**
 * UPDATED: Now handles the text change AND triggers the grid filter
 * @param {string} displayName - The text shown in the trigger
 * @param {string} categoryKey - The key used in amenityData (all, wellness, etc.)
 */
function selectAmenity(displayName, categoryKey) {
    currentText.textContent = displayName;
    options.classList.remove('show');
    trigger.classList.remove('active');

    // Trigger the filtering animation and loading
    filterGridByCategory(categoryKey);
}

// Function to handle the animation transition between categories
function filterGridByCategory(category) {
    if (!amenityGrid) return;

    if (typeof gsap !== 'undefined' && amenityGrid.children.length > 0) {
        // Fade out current items
        gsap.to(amenityGrid.children, {
            opacity: 0,
            y: 20,
            duration: 0.3,
            stagger: 0.05,
            onComplete: () => {
                loadAmenities(category);
            }
        });
    } else {
        // Fallback if GSAP isn't loaded
        loadAmenities(category);
    }
}

// Close dropdown if clicking outside
document.addEventListener('click', function (e) {
    if (trigger && !trigger.contains(e.target) && !options.contains(e.target)) {
        options.classList.remove('show');
        trigger.classList.remove('active');
    }
});