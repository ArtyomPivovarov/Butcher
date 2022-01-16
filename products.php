<?php
$pageClass = 'products';
$pageType = 'products';
$title = 'Мясник Джонни - продукция';

require('partials/header.php'); ?>
<main>
    <?php render('common/promo', ['title' => 'Продукция']); ?>
    <section class="products-page__content js-section" id="products">
        <div class="content-container products-page__inner">
            <nav class="products-page__nav">
                <div class="products-page__nav-inner">
                    <a class="products-page__nav-link decor decor--hover js-tab-link" href="#pork">
                        <?= getSymbol('pork-decor') ?>
                        Свинина
                    </a>
                    <a class="products-page__nav-link decor decor--hover js-tab-link"
                       href="#fish">
                        <?= getSymbol('fish-decor') ?>
                        Рыба
                    </a>
                    <a class="products-page__nav-link decor decor--hover js-tab-link"
                       href="#chicken">
                        <?= getSymbol('chicken-decor') ?>
                        Курица
                    </a>
                    <a class="products-page__nav-link decor decor--hover js-tab-link"
                       href="#beef">
                        <?= getSymbol('cow-decor') ?>
                        Говядина
                    </a>
                    <a class="products-page__nav-link decor decor--hover js-tab-link"
                       href="#turkey">
                        <?= getSymbol('chicken-decor') ?>
                        Индейка
                    </a>
                </div>
            </nav>

            <div class="products-page__select-wrap">
                <select class="products-page__select js-tab-select">
                    <option value="pork" selected>Свинина</option>
                    <option value="fish">Рыба</option>
                    <option value="chicken">Курица</option>
                    <option value="beef">Говядина</option>
                    <option value="turkey">Индейка</option>
                </select>
            </div>

            <div class="products-page__products js-tab-content" id="pork">
                <a class="products-page__item" href="/vepr.php">
                    <h3 class="products-page__item-title">
                        Рулька копченая свиная

                        <span class="products-page__item-subtitle">
                            “ Вепрь ”
                        </span>
                    </h3>

                    <span class="products-page__item-picture">
                        <img src="/pictures/products/vepr.jpg" alt="">
                    </span>

                    <span class="btn products-page__item-btn">
                        Подробнее
                    </span>
                </a>

                <a class="products-page__item" href="/carbonella.php">
                    <h3 class="products-page__item-title">
                        Карбонат свиной копченый

                        <span class="products-page__item-subtitle">
                            “ Карбонела ”
                        </span>
                    </h3>

                    <span class="products-page__item-picture">
                        <img src="/pictures/products/carbonella.jpg" alt="">
                    </span>

                    <span class="btn products-page__item-btn">
                        Подробнее
                    </span>
                </a>

                <a class="products-page__item" href="/svinushka.php">
                    <h3 class="products-page__item-title">
                        Корейка на кости копченая

                        <span class="products-page__item-subtitle">
                            “ Свин Юшка ”
                        </span>
                    </h3>

                    <span class="products-page__item-picture">
                        <img src="/pictures/products/svinuska.jpg" alt="">
                    </span>

                    <span class="btn products-page__item-btn">
                        Подробнее
                    </span>
                </a>

                <a class="products-page__item" href="/grudinka.php">
                    <h3 class="products-page__item-title">
                        Грудинка свиная копченая

                        <span class="products-page__item-subtitle">
                            “ Грудинка <s>для</s>&nbsp; любимой женщины ”
                        </span>
                    </h3>

                    <span class="products-page__item-picture">
                        <img src="/pictures/products/grudinka.jpg" alt="">
                    </span>

                    <span class="btn products-page__item-btn">
                        Подробнее
                    </span>
                </a>

                <a class="products-page__item" href="/svinella.php">
                    <h3 class="products-page__item-title">
                        Мясной хворост

                        <span class="products-page__item-subtitle">
                            “ Свинела ”
                        </span>
                    </h3>

                    <span class="products-page__item-picture">
                        <img src="/pictures/products/hvorost.jpg" alt="">
                    </span>

                    <span class="btn products-page__item-btn">
                        Подробнее
                    </span>
                </a>
            </div>

            <div class="products-page__products js-tab-content" id="fish">
                <a class="products-page__item" href="/karamut.php">
                    <h3 class="products-page__item-title">
                        Карамут копченый

                        <span class="products-page__item-subtitle">
                           “ Рыбка из тридевятого царства ”
                        </span>
                    </h3>

                    <span class="products-page__item-picture">
                        <img src="/pictures/products/karamut.jpg" alt="">
                    </span>

                    <span class="btn products-page__item-btn">
                        Подробнее
                    </span>
                </a>
            </div>

            <div class="products-page__products js-tab-content" id="chicken">
                <a class="products-page__item" href="/grudinka-chicken.php">
                    <h3 class="products-page__item-title">
                        Грудинка куриная копченая

                        <span class="products-page__item-subtitle">
                           “ Папина кура ”
                        </span>
                    </h3>

                    <span class="products-page__item-picture">
                        <img src="/pictures/products/grudinka-chicken.jpg" alt="">
                    </span>

                    <span class="btn products-page__item-btn">
                        Подробнее
                    </span>
                </a>

                <a class="products-page__item" href="/kura-kopchenaya.php">
                    <h3 class="products-page__item-title">
                        Тушка куры копченая

                        <span class="products-page__item-subtitle">
                           “ Кура Люха ”
                        </span>
                    </h3>

                    <span class="products-page__item-picture">
                        <img src="/pictures/products/default.jpg" alt="">
                    </span>

                    <span class="btn products-page__item-btn">
                        Подробнее
                    </span>
                </a>

                <a class="products-page__item" href="/kurella.php">
                    <h3 class="products-page__item-title">
                        Хворост мясной

                        <span class="products-page__item-subtitle">
                           “ Курела ”
                        </span>
                    </h3>

                    <span class="products-page__item-picture">
                        <img src="/pictures/products/hvorost.jpg" alt="">
                    </span>

                    <span class="btn products-page__item-btn">
                        Подробнее
                    </span>
                </a>
            </div>

            <div class="products-page__products js-tab-content" id="beef">
                <a class="products-page__item" href="/govidella.php">
                    <h3 class="products-page__item-title">
                        Мясной хворост

                        <span class="products-page__item-subtitle">
                           “ Говидела ”
                        </span>
                    </h3>

                    <span class="products-page__item-picture">
                        <img src="/pictures/products/hvorost.jpg" alt="">
                    </span>

                    <span class="btn products-page__item-btn">
                        Подробнее
                    </span>
                </a>
            </div>

            <div class="products-page__products js-tab-content" id="turkey">
                <a class="products-page__item" href="/golen-indeiki.php">
                    <h3 class="products-page__item-title">
                        Голень индейки копченая

                        <span class="products-page__item-subtitle">
                           “ Индейка ”
                        </span>
                    </h3>

                    <span class="products-page__item-picture">
                        <img src="/pictures/products/golen-indeiki.jpg" alt="">
                    </span>

                    <span class="btn products-page__item-btn">
                        Подробнее
                    </span>
                </a>

                <a class="products-page__item" href="/indushka.php">
                    <h3 class="products-page__item-title">
                        Хворост мясной

                        <span class="products-page__item-subtitle">
                           “ Индушка ”
                        </span>
                    </h3>

                    <span class="products-page__item-picture">
                        <img src="/pictures/products/hvorost.jpg" alt="">
                    </span>

                    <span class="btn products-page__item-btn">
                        Подробнее
                    </span>
                </a>
            </div>
        </div>
    </section>
    <?php render('common/write-to-us', ['class' => 'write-to-us--footer products-page__write-to-us']); ?>
    <?php render('common/to-top-btn'); ?>
</main>
<?php require('partials/footer.php'); ?>


