<?php
$config = array();
$config['name'] = "Standalone Updater";
$config['author'] = "gary@devcu.com";
$config['no_cache'] = false;
$config['ui'] = false;
$config['ui_admin'] = true;
$config['is_system'] = true;
$config['categories'] = "other";
$config['position'] = 1;
$config['version'] = '5.4';



$config['settings']['autoload_namespace'] = [
    [
        'path' => __DIR__ . '/src/',
        'namespace' => 'Laralips\\Modules\\StandaloneUpdater'
    ],
];

$config['settings']['service_provider'] = [
    \Laralips\Modules\StandaloneUpdater\StandaloneUpdaterServiceProvider::class
];
