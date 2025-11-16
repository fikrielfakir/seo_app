function filterTool(selectedCategory, scrollToTop = true) {
    const toolsContainers = document.querySelectorAll('.products');
    const categoryContainers = document.querySelectorAll('.category-nav .nav-menu li');

    let scrollToY = 0; // Initialize scroll position

    toolsContainers.forEach(function(container) {
        const containerCategory = container.getAttribute('value');
        if (selectedCategory === 'all' || containerCategory === selectedCategory) {
            container.style.display = 'block';
            // Check if the container is visible
            if (scrollToTop && container.getBoundingClientRect().top >= 0) {
                scrollToY = container.getBoundingClientRect().top + window.pageYOffset; // Update scroll position
            }
        } else {
            container.style.display = 'none';
        }
    });

    if (scrollToTop) {
        // Scroll to the top of the first visible product section
        window.scrollTo({
            top: scrollToY,
            behavior: 'smooth'
        });
    }

    // Update active category button
    categoryContainers.forEach(function(btn) {
        btn.classList.remove('active');
    });
    const activeButton = document.querySelector('.category-nav .nav-menu li[data-category="' + selectedCategory + '"]');
    if (activeButton) {
        activeButton.classList.add('active');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Call filterTool without scrolling
    filterTool('text-analysis-tools', false);
});
