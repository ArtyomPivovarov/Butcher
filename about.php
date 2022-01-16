<?php
$pageClass = 'about';
$pageType = 'about';
$title = 'Мясник Джонни - о нас';

require('partials/header.php'); ?>
<main>
    <?php render('common/promo', ['title' => 'О нас']); ?>
    <div class="about-page__content">
        <div class="content-container about-page__content-inner">
            <section class="about-page__description">
                <div class="about-page__description-picture">
                    <img src="/pictures/about/main.jpg" alt="">
                </div>

                <div class="about-page__description-text">
                    <strong>Мясник Джонни</strong>, создатель бренда, инженер&nbsp;&mdash; строитель&nbsp;&mdash; регулировщик, начальник и&nbsp;прораб, при строительстве своего собственного завода, от&nbsp;чистого участка до&nbsp;работающего производства. Многодетный отец. Построил сначала свою собственную коптильную установку потом свой собственный завод.<br>
                    <br>
                    <strong>Жена Мясника</strong>&nbsp;&mdash; главный идеолог в&nbsp;семье, финансовый аналитик, инженер- сметчик, проектировщик, бухгалтер, снабженец, начальник технического отдела строительной
                    фирмы со&nbsp;стажем в&nbsp;15&nbsp;лет. Многодетная мама. С&nbsp;мясником семья&nbsp;&mdash; 16&nbsp;лет.
                </div>
            </section>

            <img class="about-page__delimeter" src="/pictures/about/delimeter.svg" alt="">

            <section class="about-page__stage">
                <h2 class="about-page__stage-title">
                    Начало
                </h2>

                <div class="about-page__stage-content">
                    <div class="about-page__stage-picture">
                        <img src="/pictures/about/1.jpg" alt="">
                    </div>

                    <div class="about-page__stage-text">
                        Когда-то давно проезжая Ломоносовский рынок мясник Джонни купил у&nbsp;частного
                        фермера кусок копчённой свиной грудинки. И&nbsp;так понравилось мяснику это мясо , что долгие семь лет мясник экспериментировал с&nbsp;коптильными установками создавая все более удобные технологический модели.<br>
                        <br>
                        И&nbsp;вот спустя время, Джонни создал свою передовую установку для копчения мяса. И&nbsp;мясо которое получалось в&nbsp;этой установке было в&nbsp;разы лучше того мяса , из-за которого все впринцыпе и&nbsp;началось.<br>
                        <br>
                        Мясник угощал друзей, коллег на&nbsp;работе и&nbsp;просто знакомых. Все в&nbsp;один голос говорили, что вкуснее мяса не&nbsp;пробовали. Много раз Джонни проводил дегустационные встречи<br>
                        <br>
                        с&nbsp;друзьями, что&nbsp;бы выбрать лучший рецепт своего мяса. Так и&nbsp;случилось, с&nbsp;лучшим рецептом и&nbsp;душевной целью семья Мясника начала строить свой собственный мясоперерабатывающий завод на&nbsp;собственной производственной земле.
                    </div>
                </div>
            </section>

            <section class="about-page__stage">
                <h2 class="about-page__stage-title">
                    Строительство
                </h2>

                <div class="about-page__stage-content">
                    <div class="about-page__stage-picture">
                        <img src="/pictures/about/1.jpg" alt="">
                    </div>

                    <div class="about-page__stage-text">
                        Начнём с&nbsp;того , что основную часть проекта (80%) семья мясника разработала сама.<br>
                        <br>
                        Изначально все спроектировано под личный производственный процесс Мясника Джонни. Обычно в&nbsp;нашей системе работает схема: Инвестор-Заказчик-Генподрядчик
                        &mdash;&nbsp;Субподрядчик.<br>
                        <br>
                        Эта та&nbsp;несовершенная система, от&nbsp;которой в&nbsp;конечном итоге большенство проектов не&nbsp;окупаются, потому что строители экономят на&nbsp;материалах и&nbsp;специалистах.
                        Они делают для #дяди# а&nbsp;по&nbsp;этому с&nbsp;отсутствием души.<br>
                        <br>
                        Огромные постоянные отчетности между этими звеньями не&nbsp;дают проекту стать душевным порывом. Все меняется когда человек с&nbsp;опытом, верой в&nbsp;себя и&nbsp;упорством берет все в&nbsp;свои руки. Так уж&nbsp;получилось , что вся эта производственная цепочка замкнулась в&nbsp;1&nbsp;звене. Это звено&nbsp;&mdash; счастливая , многодетная семья!
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php render('common/to-top-btn'); ?>
</main>
<?php require('partials/footer.php'); ?>


