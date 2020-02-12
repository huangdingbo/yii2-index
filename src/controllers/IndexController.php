<?php


namespace dsj\index\controllers;


use dsj\components\controllers\WebController;
use yii\web\Controller;

class IndexController extends WebController
{

    public function actionIndex(){

        return $this->render('index');
    }
}