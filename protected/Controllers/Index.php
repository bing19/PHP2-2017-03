<?php
namespace Controllers;

class Index
    extends \Controller
{

    protected function actionDefault()
    {
        $this->view->articles = \Models\Article::findAll();
        $this->view->display(__DIR__ . '/../../templates/default.php');
    }

}