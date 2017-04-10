<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Article;

class News
    extends Controller
{

    protected function actionOne()
    {
        $this->view->item = Article::findOneById($_GET['id']);
        $this->view->display(__DIR__ . '/../../templates/one.php');
    }

}