<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/7
 * Time: 19:28
 */

namespace app\controllers;


use app\models\Admin;
use yii\web\Controller;

class AdminController extends Controller
{

    public  function actionIndex()
    {
//      $list = \Yii::$app->db->createCommand('select * from `admin`')->queryAll();
        $list = Admin::find()->all();
        return $this->render('index',['list'=>$list]);
    }

    public function actionAdd()
    {
        return $this->render('add');
    }
    public function actionAddsave()
    {


        $model= new Admin();

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(array('index'));
        }else{
            echo '13';
        }
//        $book->password = \Yii::$app->request->post('password');
//        $book->create_time = time();
//        $book->update_time = time();

    }

    public function actionEdit()
    {
        $id = \Yii::$app->request->get('uid');
        $data = Admin::findOne($id);
        return $this->render('edit',['list'=>$data]);
    }

    public function  actionSave()
    {
        $model = new Admin();
        $data = \Yii::$app->request->post();

        if($model->insert($data)){

        $this->redirect('/index','修改成功');
        }else{
            echo '添加失败';
        }

    }
}