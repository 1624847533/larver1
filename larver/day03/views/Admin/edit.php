<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/8
 * Time: 7:17
 */

?>
<form action="<?= \yii\helpers\Url::to(['save'])?>" method="post">
         <input type="hidden" name="uid" value="<?= \yii\helpers\Html::encode($list['uid'])?>">
    姓名:<input type="text" name="username" value="<?=\yii\helpers\Html::encode($list['username'])?>"><br><br>
    密码:<input type="text" name="password"value=" <?=\yii\helpers\Html::encode($list['password']) ?>"><br><br>
    <input type="submit" value="添加">
</form>
