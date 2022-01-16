<?
/** @noinspection PhpUnused */
define('P_DR', realpath(__DIR__ . '/../'));
define("P_LOCAL", "/");
define("P_LOCAL_PATH", P_DR . P_LOCAL);
define('P_IMAGES', 'images/');
define('P_PICTURES', 'pictures/');
define('P_PARTIALS', 'partials/');
define('SYMBOLS_SVG', P_IMAGES . 'svg-symbols.svg');

/**
 * @param string $id Название файла в папке /images/symbol/ (id символа в /images/svg-symbols.svg)
 * @param string $class
 * @param string $useClass
 *
 * @return string
 */
function getSymbol(string $id = '', string $class = '', string $useClass = ''): string {
    return '<svg class="symbol-' . $id . ' ' . $class . '">' .
           '<use class="symbol__use ' . $useClass . '" xlink:href="' . SYMBOLS_SVG . '#' . $id . '"></use>' .
           '</svg>';
}

/**
 * @param string $path
 * @return string
 */
function getPicture(string $path): string {
    $fullPath = P_LOCAL_PATH . P_PICTURES . $path;
    $time = file_exists($fullPath) ? filemtime($fullPath) : 0;

    return P_PICTURES . $path . "?" . $time;
}

/**
 * @param string $path
 * @return string
 */
function getImage(string $path): string {
    $fullPath = P_LOCAL_PATH . P_IMAGES . $path;
    $time = file_exists($fullPath) ? filemtime($fullPath) : 0;

    return P_IMAGES . $path . "?" . $time;
}

/**
 * Рендер партиала с параметрами
 * @param $template
 * @param array $params
 */
function render(string $template, array $params = []): void {
    if (is_array($params)) {
        extract($params);
    }

    include P_DR . DIRECTORY_SEPARATOR . P_PARTIALS . $template . '.php';
}
