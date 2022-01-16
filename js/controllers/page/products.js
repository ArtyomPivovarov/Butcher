import BasePage from "./base";

class ProductsPage extends BasePage {
    constructor(el) {
        super(el);

        this.contentVisibleClass = 'products-page__products--visible';
        this.linkVisibleClass = 'decor--active';
        this.tabContents = this.el.querySelectorAll('.js-tab-content');
        this.tabLinks = this.el.querySelectorAll('.js-tab-link');
        this.tabSelect = this.el.querySelector('.js-tab-select');

        this.setStartTab();
        this.initTabs();
    }

    initTabs() {
        this.tabLinks.forEach(tabLink => {
            tabLink.addEventListener('click', ev => {
                ev.preventDefault();

                const id = $(tabLink).attr('href').replace('#', '');

                this.tabContents.forEach(el => {
                    el.classList.toggle(this.contentVisibleClass, el.id === id)
                });

                this.tabLinks.forEach(el => {
                    el.classList.toggle(this.linkVisibleClass, el === tabLink);
                });

                this.tabSelect.value = id;

                history.pushState(null, null, `#${id}`);
            })
        });

        this.tabSelect.addEventListener('change', ev => {
            const id = ev.target.value;

            this.tabContents.forEach(el => {
                el.classList.toggle(this.contentVisibleClass, el.id === id)
            });

            this.tabLinks.forEach(el => {
                const targetId = $(el).attr('href').replace('#', '');
                el.classList.toggle(this.linkVisibleClass, id === targetId);
            });

            history.pushState(null, null, `#${id}`);
        })
    }

    setStartTab() {
        const tabId = window.location.href.split('#')[1] ?? this.tabContents[0].id;

        this.tabContents.forEach(el => {
            if (el.id === tabId) {
                el.classList.add(this.contentVisibleClass);
            }
        });

        this.tabLinks.forEach(el => {
            if ($(el).attr('href').replace('#', '') === tabId) {
                el.classList.add(this.linkVisibleClass);
            }
        });

        this.tabSelect.value = tabId;
    }
}

new ProductsPage(document.querySelector('body'));
