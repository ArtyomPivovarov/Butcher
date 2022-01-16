<header class="header js-header">
    <div class="content-container header__container">
        <button class="header__burger js-header-burger">
            <?= getSymbol('burger') ?>
        </button>
        <nav class="header__nav js-header-nav">
            <div class="header__nav-item">
                <a class="header__nav-link header__nav-text" href="/">Главная</a>
            </div>
            <div class="header__nav-item">
                <a class="header__nav-link header__nav-text" href="/about.php">О&nbsp;нас</a>
            </div>
            <div class="header__nav-item">
                <a class="header__nav-link header__nav-text" href="/products.php">Продукция</a>
            </div>
            <a class="header__logo" href="/">
                <img src="images/logo.svg" alt="">
            </a>
            <div class="header__nav-item">
                <a class="header__nav-link header__nav-text"
                   href="https://www.instagram.com/johnnythebutcher2020/">Новости</a>
            </div>
            <div class="header__nav-item">
                <span class="header__nav-text js-header-dropdown-opener">Где купить</span>
                <div class="header__dropdown">
                    <div class="header__dropdown-title">
                        В магазинах сети:
                    </div>

                    <a class="header__dropdown-item" href="https://av.ru/" target="_blank">
                        Азбука вкуса
                    </a>
                    <a class="header__dropdown-item" href="https://vkusvill.ru/" target="_blank">
                        ВкусВилл
                    </a>
                    <a class="header__dropdown-item" href="https://lenta.com/" target="_blank">
                        Лента
                    </a>
                    <a class="header__dropdown-item" href="https://www.perekrestok.ru/"
                       target="_blank">
                        Перекрёсток
                    </a>
                </div>
            </div>
            <div class="header__nav-item">
                <a class="header__nav-link header__nav-text" href="/contacts.php">Контакты</a>
            </div>
        </nav>
    </div>
</header>
