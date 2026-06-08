const page = window.location.pathname;
const navLinks = document.querySelectorAll('nav ul li a');
navLinks.forEach(link => {
    if (page.includes(link.getAttribute('href'))) {
        link.classList.add('active');
        link.classList.add('text-warning');
        link.classList.remove('text-white');
    }
});