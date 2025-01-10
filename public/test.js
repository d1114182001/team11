document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.title, .section');
    const checkVisibility = () => {
        elements.forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight) {
                el.classList.add('visible');
            }
        });
    };
    checkVisibility();
    document.addEventListener('scroll', checkVisibility);
});