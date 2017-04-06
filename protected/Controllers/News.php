<?php
namespace Controllers;

class News
    extends \Controller
{

    protected function actionOne()
    {
        $this->view->item = \Models\Article::findOneById($_GET['id']);
        $this->view->display(__DIR__ . '/../../templates/one.php');
    }

}