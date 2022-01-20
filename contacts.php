<?php
$pageClass = 'contacts';
$pageType = 'contacts';
$title = 'Мясник Джонни - контакты';

require('partials/header.php'); ?>
<main>
    <?php render('common/promo', ['title' => 'Контакты']); ?>
    <div class="contacts-page__content">
        <div class="content-container contacts-page__content-inner">
            <div class="contacts-page__addresses">
                <div class="contacts-page__addresses-item">
                    <h2 class="contacts-page__addresses-title">
                        Адрес производства:
                    </h2>

                    Ленинградская область,<br>
                    Ломоносовский район,<br>
                    Низинское сельское поселение,<br>
                    АПЗ “Порзолово”
                </div>

                <div class="contacts-page__addresses-item">
                    <h2 class="contacts-page__addresses-title">
                        Адрес юридического лица:
                    </h2>

                    г. Санкт-Петербург<br>
                    ул. Ворошилова д.2 литер АБ<br>
                    помещение 9H, офис 905.
                </div>

                <div class="contacts-page__addresses-links">
                    <a class="contacts-page__addresses-link" href="tel:79516673314">
                        <span>Тел: 8(951)-667-33-14</span>
                    </a>

                    <a class="contacts-page__addresses-link" href="tel:79045193466">
                        <span>Тел: 8(904)-519-34-66</span>
                    </a>

                    <a class="contacts-page__addresses-link" href="mailto:JohnnyTheButcher@yandex.ru">
                        <span>JohnnyTheButcher@yandex.ru</span>
                    </a>
                </div>
            </div>

            <?php render('common/contacts') ?>
        </div>
    </div>
    <?php render('common/write-to-us', ['class' => 'write-to-us--footer contacts-page__write-to-us']); ?>
    <?php render('common/to-top-btn'); ?>
</main>
<?php require('partials/footer.php'); ?>


