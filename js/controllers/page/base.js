import PageControls from "../partials/page-controls";
import Header from "../partials/header";
import smoothscroll from 'smoothscroll-polyfill';


class BasePage {
    constructor(el) {
        this.el = el;

        smoothscroll.polyfill();

        new Header(document.querySelector('.js-header'));
        new PageControls(el);

        this.initAnchorLinks();
    }

    initAnchorLinks() {
        $('.js-anchor-link').on('click', function(e) {
            e.preventDefault();

            const href = $(e.target).attr('href');
            const elSelector = href.replace('/', '');

            $(elSelector)[0].scrollIntoView({
                behavior: "smooth",
            });

            history.pushState(null, null, elSelector);
        });
    }
}

export default BasePage;


