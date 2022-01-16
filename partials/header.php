<?
/* @var string $pageClass */
/* @var string $title */

require_once 'helper.php';

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="cmsmagazine" content="2c2951bb57cffc1481be768a629d3a6e" />
    <meta name="format-detection" content="telephone=no">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="description" content="<?= htmlspecialchars($title) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?
    // Автоматический прелоад шрифтов
    $fontsPath = 'fonts';
    if ($dirh = opendir(P_LOCAL_PATH . $fontsPath)) {
        while ($file = readdir($dirh)) {
            if (in_array($file, ['.', '..'])) continue;
            if (!preg_match('/.*\.woff2$/i', $file)) continue;

            ?><link rel="preload" href="<?= $fontsPath ?>/<?= $file ?>" as="font" crossorigin="anonymous"><?
        }
    }
    ?>
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="dist/style.css?v=<?= filemtime('dist/style.css') ?>">
</head>
<body class="<?= $pageClass ?>-page">
    <? render('header-content') ?>
