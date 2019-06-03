<?php

namespace backend\controllers;

use app\models\User;
use Yii;
use yii\data\ActiveDataProvider;


class UsersController extends \yii\web\Controller
{
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);

        } else {
            $dataProvider = new ActiveDataProvider([
                'query' => User::find(),
            ]);

            return $this->render('index', [
                'dataProvider' => $dataProvider,
            ]);
        }
    }


}

