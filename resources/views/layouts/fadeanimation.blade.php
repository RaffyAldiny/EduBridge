<!-- resources/views/layouts/animations.blade.php -->
<style>
    /* Create a full-screen black overlay */
    .fade-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: black;
        z-index: 1000; /* High z-index to ensure it is on top */
        opacity: 0.6; /* Start with full opacity */
        pointer-events: none; /* Prevent the overlay from blocking clicks */
        transition: opacity 0.8s ease-in-out;
    }

    .fade-overlay.fade-out {
        opacity: 0.0; /* Fade-out effect */
    }
</style>

<!-- Overlay with Alpine.js to handle removal -->
<div x-data="{ visible: true }" 
     x-init="setTimeout(() => visible = false, 1)" 
     x-show="visible" 
     x-transition:leave="fade-out" 
     class="fade-overlay">
</div>
