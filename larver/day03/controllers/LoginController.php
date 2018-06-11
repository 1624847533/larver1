<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/8
 * Time: 9:47
 */

namespace app\controllers;


use app\models\Login;
use yii\web\Controller;

class LoginController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionLogin(){

        $model = new Login();

        if($model->check(\Yii::$app->request->post())){
            return $this->redirect(['pind/index']);
        }
    }
}