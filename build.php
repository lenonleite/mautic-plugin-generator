<?php
declare(strict_types=1);
// choice m4 or m5, for default is m5
$version = 'm5';
if ($argc > 1) {
    $version = $argv[1];
}

var_dump('Loading files...');
$dataConfig = include __DIR__ . '/config.php';
$path = __DIR__ . '/Scarffold/'.$version;
$tempFolder = __DIR__ . '/temp';
var_dump('Creating temp folder...');
if (is_dir($tempFolder)) {
    exec('rm -rf ' . $tempFolder);
}
mkdir($tempFolder);

var_dump('Copying to temp folder...');
exec('cp -r ' . $path . ' ' . $tempFolder);

var_dump('Reading files...');
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($tempFolder, RecursiveDirectoryIterator::SKIP_DOTS),
    RecursiveIteratorIterator::SELF_FIRST
);
var_dump('Refactoring files...');
foreach ($iterator as $item) {
    if (!$item->isDir()) {
        $file = file_get_contents($item->getPathname());
        file_put_contents($item->getPathname(), refactor($file));
    }

    rename($item->getPathname(), refactor($item->getPathname()));
}
var_dump('Move to plugin folder...');
if (!is_dir(__DIR__ . '/../plugins/' . $dataConfig['PLUGIN_NAME'] . 'Bundle')) {
    mkdir(__DIR__ . '/../plugins/' . $dataConfig['PLUGIN_NAME'] . 'Bundle');
}
exec('mv ' . $tempFolder . '/'.$version.'/* ' . __DIR__ . '/../plugins/' . $dataConfig['PLUGIN_NAME'] . 'Bundle');
var_dump('Deleting temp');

if (is_dir($tempFolder)) {
    exec('rm -rf ' . $tempFolder);
}
function refactor($content)
{
    global $dataConfig;
    foreach ($dataConfig as $key => $value) {
        $content = str_replace('##'.$key.'##', $value, $content);
    }
    return $content;
}
