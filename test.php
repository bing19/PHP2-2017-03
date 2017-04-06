<?php

require_once __DIR__ . '/protected/autoload.php';

try {
    $obj = new FluentClass();

    $obj->fill([
        'foo' => 1, // setFoo
        'bar' => -1,// setBar
        'baz' => 0, // setBaz
    ]);
} catch (Errors $errors) {
    foreach ($errors as $error) {
        echo $error->getMessage();
    }
}

var_dump($obj->getValues());