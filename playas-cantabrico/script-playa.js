// Menú que cambia al desplazarse
const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 60);
}, { passive: true });

// Animaciones progresivas de los contenedores
const revealObserver = new IntersectionObserver((entries, observer) => {

    entries.forEach(entry => {

        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }

    });

}, {
    threshold: 0.12,
    rootMargin: '0px 0px -35px 0px'
});

document.querySelectorAll('.reveal').forEach(element => {
    revealObserver.observe(element);
});