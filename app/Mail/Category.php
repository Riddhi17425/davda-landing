<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'category';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'category_title',
        'url',
    ];

    public function properties()
{
    return $this->hasMany(PropertyDetail::class);
}
}



<style>
    .tab-content {
    display: none;
}

.bungalow-slider {
    display: none;
}

.tab-button.active {
    font-weight: bold;
}

</style>
<script>

window.onload = function () {
    // Get all tab buttons
    const tabButtons = document.querySelectorAll('.tab-button');

    // Function to activate the selected tab for a specific category
    function activateTab(categoryId, tabId) {
        // Find the category section using the categoryId
        const categorySection = document.querySelector(`[data-category-id="${categoryId}"]`);
        
        // Get all tabs, tab content, and sliders within the specific category
        const categoryTabs = categorySection.querySelectorAll('.tab-content');
        const categorySliders = categorySection.querySelectorAll('.bungalow-slider');
        const categoryTabButtons = categorySection.querySelectorAll('.tab-button');

        // Hide all tab content and sliders within the specific category
        categoryTabs.forEach(function(tab) {
            tab.style.display = 'none';  // Hide tab content
        });
        categorySliders.forEach(function(slider) {
            slider.style.display = 'none';  // Hide sliders
        });

        // Remove the 'active' class from all tab buttons in this category
        categoryTabButtons.forEach(function(button) {
            button.classList.remove('active');
        });

        // Show the selected tab's content and slider in the specific category
        const activeContent = categorySection.querySelector(`[data-content="${tabId}"]`);
        const activeSlider = categorySection.querySelector(`[data-slider="${tabId}"]`);
        const activeButton = categorySection.querySelector(`[data-tab="${tabId}"]`);

        if (activeContent) activeContent.style.display = 'block';  // Show active tab content
        if (activeSlider) activeSlider.style.display = 'block';  // Show active slider
        if (activeButton) activeButton.classList.add('active');  // Mark the active tab
    }

    // Add event listeners to all tab buttons
    tabButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Get categoryId from the data-category-id attribute of the closest .bungalow-section
            const categoryId = button.closest('.bungalow-section').getAttribute('data-category-id');
            const tabId = button.getAttribute('data-tab');  // Get the tab ID
            activateTab(categoryId, tabId);  // Activate the tab in the specific category
        });
    });

    // On page load, show the first tab for each category
    const categories = document.querySelectorAll('.bungalow-section');
    categories.forEach(function(category) {
        const firstTabButton = category.querySelector('.tab-button');
        if (firstTabButton) {
            const categoryId = category.getAttribute('data-category-id');
            // Show the first tab of each category by default on page load
            activateTab(categoryId, firstTabButton.getAttribute('data-tab'));
        }
    });
};


</script>
