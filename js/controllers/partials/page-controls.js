class PageControls {
    constructor(el) {
        this.el = el;

        this.toTopHiddenClass = 'to-top-btn--hidden';
        this.toTopRedWhiteClass = 'to-top-btn--red-white';
        this.toTopRedGreyClass = 'to-top-btn--red-grey';

        this.sectionDetectHiddenClass = 'section-detect--hidden';
        this.activeSectionItemClass = 'section-detect__item--active';
        this.blackItemClass = 'section-detect__item--black';

        this.toTopBtn = this.el.querySelector('.js-to-top-btn');
        this.sectionDetect = this.el.querySelector('.js-section-detect');
        this.items = this.el.querySelectorAll('.js-section-detect-item');
        this.sections = this.el.querySelectorAll('.js-section');

        this.toTopBtn.classList.toggle(this.toTopHiddenClass, window.scrollY < 680);
        this.sectionDetect?.classList.toggle(this.sectionDetectHiddenClass, window.scrollY < 680);

        const observerOptions = {
            threshold: 0.5,
        };

        const observer = new IntersectionObserver((entries => {
            entries.forEach(entry => {
                if (entry && entry.isIntersecting) {
                    this.items.forEach(el => {
                        const href = $(el).attr('href');
                        const elSelector = href.replace('/#', '');
                        const isActiveItem = elSelector === entry.target.id;

                        el.classList.toggle(this.activeSectionItemClass, isActiveItem);
                        el.classList.toggle(this.blackItemClass, elSelector === 'about');
                    });

                    const isRedWhiteToTop = entry.target.id === 'products' ||
                        entry.target.id === 'socials' ||
                        entry.target.id === 'contacts';
                    const isRedGreyToTop = entry.target.id === 'write-to-us';

                    this.toTopBtn.classList.toggle(this.toTopRedWhiteClass, isRedWhiteToTop);
                    this.toTopBtn.classList.toggle(this.toTopRedGreyClass, isRedGreyToTop);
                }
            })
        }), observerOptions);

        this.sections.forEach(el => {
            observer.observe(el);
        });

        window.addEventListener('scroll', () => {
            this.toTopBtn.classList.toggle(this.toTopHiddenClass, window.scrollY < 680);
            this.sectionDetect?.classList.toggle(this.sectionDetectHiddenClass, window.scrollY < 680);
        });

        this.toTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }
}

export default PageControls;
