<?php

namespace app\controllers;


class CabinetController extends \yii\web\Controller
{
    public $layout = 'sabaki';

    public function actionRegister()
    {
        return $this->render('registration', ['danil' => 'Я василь!']);
    }
}
