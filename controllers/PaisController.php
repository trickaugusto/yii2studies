<?php

namespace app\controllers;

class PaisController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\models\Pais';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
