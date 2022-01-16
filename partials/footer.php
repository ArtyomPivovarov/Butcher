<?
/* @var string $pageType */
?>

<?php render('footer-content'); ?>
<?

// JS'ки подключаются так, чтобы к ним добавлялось время последней модификации
$jsFileList = ['commons.bundle'];

if ($pageType) {
    $jsFileList[] = $pageType . ".bundle";
}

foreach ($jsFileList as $jsFilename):
    $jsFilePath = "js/bundle/$jsFilename.js";
    if (!file_exists($jsFilePath)) continue;
    ?><script src="<?= $jsFilePath . '?' . filemtime($jsFilePath)?>"></script><?
endforeach;

?>
</body>
</html>

