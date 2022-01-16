<?php
$pageClass = 'main';
$pageType = 'main';
$title = 'Мясник Джонни';

require('partials/header.php'); ?>
<main>
    <?php render('main/promo'); ?>
    <?php render('main/about'); ?>
    <?php render('main/products'); ?>
    <?php render('main/delimeter'); ?>
    <?php render('main/socials'); ?>
    <?php render('common/write-to-us'); ?>
    <?php render('main/contacts'); ?>
    <?php render('common/section-detect'); ?>
    <?php render('common/to-top-btn'); ?>
</main>
<?php require('partials/footer.php'); ?>


