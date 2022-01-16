class Header {
    constructor(el) {
        this.el = el;

        this.navOpenClass = 'header--nav-open';
        this.dropdownOpenClass = 'header--dropdown-open';

        this.nav = el.querySelector('.js-header-nav');
        this.burger = el.querySelector('.js-header-burger');
        this.dropdownOpeners = el.querySelectorAll('.js-header-dropdown-opener');

        this.burger.addEventListener('click', () => {
            this.el.classList.toggle(this.navOpenClass);
            this.el.classList.remove(this.dropdownOpenClass);
        });

        this.dropdownOpeners.forEach(el => {
            el.addEventListener('click', () => {
                this.el.classList.toggle(this.dropdownOpenClass);
            })
        });
    }
}

export default Header;
