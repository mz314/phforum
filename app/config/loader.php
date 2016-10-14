<?php


$loader = new \Phalcon\Loader();


$loader->registerNamespaces([
    'PhForum\\Models' => $config->application->modelsDir,
    'PhForum\\Controllers' => $config->application->controllersDir,
    'PhForum\\Forms'=> $config->application->formsDir,
    'PhForum\\Lib'=> $config->application->libDir,
    ]
);

$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir,
        $config->application->formsDir,
        $config->application->libDir,
    ]
)->register();
