<?php
/** @var string $title */
?>

<section class="promo">
    <?php if (isset($title)) {
        echo '<h1 class="promo__title">' . $title . '</h1>';
    } ?>
</section>
