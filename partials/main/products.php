<section class="main-products js-section" id="products">
    <div class="content-container main-products__content">
        <a class="main-products__title-link" href="/products.php">
            <h2 class="main-products__title decor">
                <?= getSymbol('products-decor') ?>
                Продукция
            </h2>
        </a>

        <div class="main-products__inner">
            <div class="main-products__item main-products__item--pork">
                <i class="line main-products__item-line"></i>

                <a class="main-products__item-link" href="/products.php#pork">
                    <h3 class="main-products__item-title decor">
                        <?= getSymbol('pork-decor') ?>
                        Свинина
                    </h3>
                </a>

                <div class="main-products__item-picture">
                    <img src="/pictures/main/pork.svg" alt="" loading="lazy">
                </div>

                <div class="main-products__item-categories list">
                    <a class="main-products__item-category list__item"
                       href="/grudinka.php">Грудинка свиная</a>
                    <a class="main-products__item-category list__item"
                       href="/carbonella.php">Карбонат свиной</a>
                    <a class="main-products__item-category list__item"
                       href="/svinushka.php">Корейка на кости</a>
                    <a class="main-products__item-category list__item"
                       href="/svinella.php">Мясной хворост</a>
                    <a class="main-products__item-category list__item"
                       href="/vepr.php">Рулька свиная</a>
                </div>
            </div>

            <div class="main-products__item main-products__item--chicken">
                <i class="line main-products__item-line"></i>

                <a class="main-products__item-link" href="/products.php#chicken">
                    <h3 class="main-products__item-title decor">
                        <?= getSymbol('chicken-decor') ?>
                        Курица
                    </h3>
                </a>

                <div class="main-products__item-picture">
                    <img src="/pictures/main/chicken.svg" alt="" loading="lazy">
                </div>

                <div class="main-products__item-categories list">
                    <a class="main-products__item-category list__item"
                       href="/grudinka-chicken.php">Грудинка куриная</a>
                    <a class="main-products__item-category list__item"
                       href="/kura-kopchenaya.php">Тушка куры</a>
                    <a class="main-products__item-category list__item"
                       href="/kurella.php">Хворост мясной</a>
                </div>
            </div>

            <div class="main-products__item main-products__item--cow">
                <i class="line main-products__item-line"></i>

                <a class="main-products__item-link" href="/products.php#beef">
                    <h3 class="main-products__item-title decor">
                        <?= getSymbol('cow-decor') ?>
                        Говядина
                    </h3>
                </a>

                <div class="main-products__item-picture">
                    <img src="/pictures/main/cow.svg" alt="" loading="lazy">
                </div>

                <div class="main-products__item-categories">
                    <a class="main-products__item-category list__item"
                       href="/govidella.php">Хворост мясной</a>
                </div>
            </div>

            <div class="main-products__item main-products__item--turkey">
                <i class="line main-products__item-line"></i>

                <a class="main-products__item-link" href="/products.php#turkey">
                    <h3 class="main-products__item-title decor">
                        <?= getSymbol('cow-decor') ?>
                        Индейка
                    </h3>
                </a>

                <div class="main-products__item-picture">
                    <img src="/pictures/main/turkey.svg" alt="" loading="lazy">
                </div>

                <div class="main-products__item-categories">
                    <a class="main-products__item-category list__item"
                       href="/golen-indeiki.php">Голень индейки</a>
                    <a class="main-products__item-category list__item"
                       href="/indushka.php">Хворост мясной</a>
                </div>
            </div>

            <div class="main-products__item main-products__item--fish">
                <i class="line main-products__item-line"></i>

                <a class="main-products__item-link" href="/products.php#fish">
                    <h3 class="main-products__item-title decor">
                        <?= getSymbol('fish-decor') ?>
                        Рыба
                    </h3>
                </a>

                <div class="main-products__item-picture">
                    <img src="/pictures/main/fish.svg" alt="" loading="lazy">
                </div>

                <div class="main-products__item-categories list">
                    <a class="main-products__item-category list__item"
                       href="/karamut.php">Карамут копченый</a>
                </div>
            </div>
        </div>

        <a class="btn main-products__btn" href="/products.php">
            Посмотреть всю продукцию
        </a>
    </div>
</section>
