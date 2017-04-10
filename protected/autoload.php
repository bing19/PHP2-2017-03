<?php

require __DIR__ . '/../vendor/autoload.php';

spl_autoload_register(function ($class) {

    // 'App\Controllers\Index'
    if (0 === strpos($class, 'App\\')) {
        // 'Controllers\Index'
        $path = substr($class, 4);
        require __DIR__ . '/' . str_replace('\\', '/', $path) . '.php';
    }

});