import './bootstrap';
import { animate } from 'animejs';

document.addEventListener('livewire:load', () => {

    // Trigger animation after Livewire updates
    Livewire.hook('message.processed', (message, component) => {
        const target = document.querySelector('.animate-div');
        if (target) {
            // Optional: reset position & opacity
            target.style.opacity = 0;
            target.style.transform = 'translateY(-20px)';

            animate({
                targets: target,
                translateY: [-20, 0],  // slide up
                opacity: [0, 1],       // fade in
                duration: 500,
                easing: 'easeOutQuad'
            });
        }
    });

});
