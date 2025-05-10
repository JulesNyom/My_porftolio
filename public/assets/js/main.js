document.addEventListener('DOMContentLoaded', () => {
    // Add intersection observer for scroll animations
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeInUp');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.experience-card').forEach(card => {
        card.classList.add('opacity-0', 'translate-y-6');
        observer.observe(card);
    });
});