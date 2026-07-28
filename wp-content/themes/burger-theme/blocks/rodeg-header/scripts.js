document.addEventListener('DOMContentLoaded', function () {
    const menu = document.querySelector('.site-header .menu');
    const nav = document.querySelector('.site-header .main-nav > nav');
    if (!menu || !nav) return;
    menu.addEventListener('click', function () {
        const open = menu.getAttribute('aria-expanded') === 'true';
        menu.setAttribute('aria-expanded', String(!open));
        nav.classList.toggle('nav-open', !open);
    });
});
