<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/8
 * Time: 9:44
 */
?>


<form action="<?=\yii\helpers\Url::to(['login'])?>" method="post">
    姓名:<input type="text" name="username"><br><br>
    密码:<input type="text" name="password"><br><br>
    <input type="submit" value="登录">
</form>
