import BasePage from "./base";
import ymaps from 'ymaps';
import { BREAKPOINTS } from "../../constants/breakpoints";

class MainPage extends BasePage {
    constructor(el) {
        super(el);

        if (window.innerWidth >= BREAKPOINTS.SM) {
            this.initMap();
        }
    }

    initMap () {
        ymaps.load()
            .then(maps => {
                const map = new maps.Map(document.querySelector('.js-map'), {
                    center: [59.833488, 29.760124],
                    zoom: 14,
                });

                map.geoObjects.add(new maps.Placemark([59.833488, 29.760124], {}, {
                    iconLayout: 'default#image',
                    iconImageHref: 'images/map-mark.svg',
                }));
            })
            .catch(error => console.log('Failed to load Yandex Maps', error));
    }
}

new MainPage(document.querySelector('body'));
