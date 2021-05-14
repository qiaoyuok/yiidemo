<?php


namespace app\controllers;

use app\components\PrintWeight;
use yii\web\Controller;

class DemoWidgetController extends Controller
{

    public function actionIndex()
    {
        echo "wafdsg";
        return PrintWeight::widget(['message'=>'ÍÛ¹ş¹ş']);
//        return $this->render('index');
    }

}