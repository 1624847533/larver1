<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/7
 * Time: 19:49
 */

?>
<form action="<?= \yii\helpers\Url::to(['addsave'])?>" method="post">

   姓名:<input type="text" name="username"><br><br>
   密码:<input type="text" name="password"><br><br>
       <input type="submit" value="添加">
</form>
