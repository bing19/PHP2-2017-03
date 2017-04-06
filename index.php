<?php

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', $uri);

require_once __DIR__ . '/protected/autoload.php';

if (!empty($parts[1])) {
    $controllerName = $parts[1];
} else {
    $controllerName = 'Index';
}

$controllerClassName = '\\Controllers\\' . $controllerName;
$controller = new $controllerClassName;


try {

    if (!empty($parts[2])) {
        $controller->action($parts[2]);
    } else {
        $controller->action('Default');
    }

} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage();
}