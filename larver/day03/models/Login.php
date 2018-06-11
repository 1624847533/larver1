<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/8
 * Time: 9:57
 */

namespace app\models;


use yii\db\ActiveRecord;

class Login extends ActiveRecord
{
    public function check($data)
    {

        if(empty($data['username']) || empty($data['password'])){
            echo "用户密码不能该为空";
            return false;
        }else{
            $user = self::findOne(['username'=>$data['username']]);
            if($user['username']==$data['username']){

                if(md5($data['password'])==$user['password']){
                    $session = \Yii::$app->session;
                    $session->set('login',$user);
                   return true;
                }else{
                    echo  "密码不存在";
                    return false;
                }
            }else{
                echo  "用户不存在";
                return false;
            }
        }
    }
}