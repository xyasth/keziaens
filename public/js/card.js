console.log("Script running...");

const cards = document.querySelectorAll('.card');

window.addEventListener('scroll', () => {
    const triggerPoint = window.innerHeight * 0.4; // Adjust this to control when the fade starts

    cards.forEach((card) => {
        const rect = card.getBoundingClientRect();

        if (rect.bottom < triggerPoint) {
            // If the bottom of the card is above the trigger point, fade it
            card.querySelector('.card-body').classList.add('fade');
        } else {
            // If the card is still in view, remove fade
            card.querySelector('.card-body').classList.remove('fade');
        }
    });
});
