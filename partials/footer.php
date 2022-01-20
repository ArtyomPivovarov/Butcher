<?php
/* @var string $pageType */
?>

<?php render('footer-content'); ?>
<?php

// JS'ки подключаются так, чтобы к ним добавлялось время последней модификации
$jsFileList = ['commons.bundle'];

if ($pageType) {
    $jsFileList[] = $pageType . ".bundle";
}

foreach ($jsFileList as $jsFilename):
    $jsFilePath = "js/bundle/$jsFilename.js";
    if (!file_exists($jsFilePath)) continue;
    ?><script src="<?= $jsFilePath . '?' . filemtime($jsFilePath)?>"></script><?php
endforeach;

?>
</body>
</html>

