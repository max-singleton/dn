document.addEventListener('DOMContentLoaded', function() {
    const button = document.querySelector('.burger');
    const buttonClose = document.querySelector('.mobile-menu__burger');
    const page = document.querySelector('.page');
    const mobileMenu = document.querySelector('.mobile-menu');
    if (!button) return;
    
    const BURGER_ACTIVE = 'burger--active';
    const PAGE_FROZY = 'page--frozy';
    
    button.addEventListener('click', function(e) {
        e.preventDefault();
        page.classList.add(PAGE_FROZY);
        button.classList.add(BURGER_ACTIVE);
        mobileMenu.classList.add('mobile-menu--active');
    })
    
    buttonClose.addEventListener('click', function(e) {
        e.preventDefault();
        page.classList.remove(PAGE_FROZY);
        button.classList.remove(BURGER_ACTIVE);
        mobileMenu.classList.remove('mobile-menu--active');
    })
    document.addEventListener('click', function(e) {
        const target = e.target;
        if (target == mobileMenu) {
            page.classList.remove(PAGE_FROZY);
            button.classList.remove(BURGER_ACTIVE);
            mobileMenu.classList.remove('mobile-menu--active');
        }
    })
})