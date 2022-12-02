<?php

namespace frontend\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'frontend\models\User';
    public function actionIndex()
    {
        return $this->render('index');
    }

}
