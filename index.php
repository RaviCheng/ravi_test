<?php
//ini_set('error_reporting', E_ALL);

// web settings
require_once 'config.php';

// 目前專案所需要的 include_path
$include_path[] = APP_REAL_PATH.'/core';
$include_path[] = APP_REAL_PATH.'/controllers';
$include_path[] = APP_REAL_PATH.'/models';
$include_path[] = APP_REAL_PATH.'/views';

set_include_path(join(PATH_SEPARATOR, $include_path));

//function __autoload($class_name)
//{
//    require_once ($class_name).'.php';
//}

function __autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace).DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className).'.php';

    require $fileName;
}

//$actions = new Actions;
//$actions->run();

$indexController = new IndexController();
$indexController->setRouter(new Router());
$indexController->run();