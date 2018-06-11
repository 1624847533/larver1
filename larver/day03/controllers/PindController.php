<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/8
 * Time: 10:48
 */

namespace app\controllers;


use app\models\Count;
use app\models\Pind;
use yii\data\Pagination;
use yii\db\ActiveRecord;
use yii\helpers\Url;
use yii\web\Controller;

class PindController extends Controller
{
    function actionIndex(){

        $model = Pind::find()->with();
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $model->count(),
        ]);
        $model = $model->limit($pagination->limit)->all();

//        $session = \Yii::$app->session;
//        $user=$session->get('user');
        return $this->render('index',['data'=>$model,'pagination'=>$pagination]);
    }


    function actionFind(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $model = new Pind();
        $model->count=\Yii::$app->request->post('count');
        $model->create_time = time();
        $model->save();

       $data =  Pind::findOne(["create_time"=>$model->create_time]);

        return $data;
    }

    function actionDelete(){
        $id=\Yii::$app->request->get('id');

        \Yii::$app->db->createCommand()->delete('pind','id='.$id)->execute();
        $this->redirect(array('index'));
    }
}