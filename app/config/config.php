<?php
/*
 * Modified: preppend directory path of current file, because of this file own different ENV under between Apache and command line.
 * NOTE: please remove this comment.
 */
defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ? : realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');

if (!file_exists(APP_PATH . '/config/local_config.php')) {
    die('Not configured.');
}

require APP_PATH . '/config/local_config.php';

return new \Phalcon\Config([
    'database' => $localDbConfig,
    'application' => [
        'appDir' => APP_PATH . '/',
        'formsDir' => APP_PATH . '/forms/',
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir' => APP_PATH . '/models/',
        'migrationsDir' => APP_PATH . '/migrations/',
        'viewsDir' => APP_PATH . '/views/',
        'pluginsDir' => APP_PATH . '/plugins/',
        'libraryDir' => APP_PATH . '/library/',
        'cacheDir' => BASE_PATH . '/cache/',
        'libDir' => APP_PATH . '/lib/',
        'baseUri' => $baseUri,
        'authSecret'=>$authSecret
    ]
    ]);
