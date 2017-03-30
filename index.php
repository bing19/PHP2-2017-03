<?php

require_once __DIR__ . '/protected/autoload.php';

$view = new View;

$view->articles = \Models\Article::findAll();

$view->display(__DIR__ . '/templates/index.php');