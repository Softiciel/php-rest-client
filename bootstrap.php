<?php
define("SRC_PATH", dirname(__FILE__) . "/src");

spl_autoload_register(function ($class) {
    $classFullPath = SRC_PATH . '/' . $class . '.php';
    if(file_exists($classFullPath)) {
        require_once($classFullPath);
    }
});