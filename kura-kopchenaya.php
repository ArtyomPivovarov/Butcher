<?php
$pageClass = 'product';
$pageType = 'product';
$title = 'Мясник Джонни';

require('partials/header.php'); ?>
<main>
    <?php render('common/promo'); ?>

    <div class="product-page__content-wrap">
        <div class="content-container product-page__content">
            <div class="product-page__left-col">
                <div class="product-page__card">
                    <h1 class="product-page__title">
                        Тушка куры &laquo;Кура Люха&raquo;
                    </h1>

                    <div class="product-page__picture">
                        <img src="pictures/products/default.jpg" alt="Тушка куры Кура Люха">
                    </div>
                </div>

                <div class="product-page__info">
                    <div class="product-page__info-item">
                        <div class="product-page__info-title">
                            Калорийность:
                        </div>
                        <div class="product-page__info-value">
                            170.0 ккал
                        </div>
                    </div>

                    <div class="product-page__info-item">
                        <div class="product-page__info-title">
                            Фасовка:
                        </div>
                        <div class="product-page__info-value">
                            1.3 кг
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-page__right-col text-content">
                <h2>
                    Описание:
                </h2>

                <p>
                    Попробуйте кусочек нежнейшего копченого мяса от&nbsp;Мясника Джонни.
                    Вы&nbsp;гарантированно познаете вкусовую точку блаженства. Лучшее мясо
                    от&nbsp;лучших животноводческих ферм и&nbsp;новейшие технологии обработки
                    мяса без применения вредной химии. Только мясо, соль и&nbsp;вода.
                    Делали для себя, делимся с&nbsp;Вами!
                </p>

                <h2>
                    Состав:
                </h2>

                <ul>
                    <li>Курятина</li>
                    <li>Соль нитритная</li>
                    <li>Вода</li>
                </ul>

                <a class="btn product-page__btn" href="/products.php">Назад к списку продукции</a>
            </div>
        </div>
    </div>
</main>
<?php require('partials/footer.php'); ?>


