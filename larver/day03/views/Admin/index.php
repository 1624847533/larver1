<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/7
 * Time: 19:14
 */


?>
<a href=" <?=yii\helpers\Url::to(['add'])?>">添加</a>
<table border="1">
    <tr>
        <td>id</td>
        <td>username</td>
        <td>password</td>
        <td>create_time</td>
        <td>update_time</td>
        <td>操作</td>
    </tr>
    <?php foreach ($list as $v): ?>
        <tr>
            <td><?=\yii\helpers\Html::encode($v['uid']) ?></td>
            <td><?=\yii\helpers\Html::encode($v['username']) ?></td>
            <td><?=\yii\helpers\Html::encode($v['password']) ?></td>
            <td><?=\yii\helpers\Html::encode($v['create_time']) ?></td>
            <td><?=\yii\helpers\Html::encode($v['update_time']) ?></td>
            <td>
                <a href="<?=\yii\helpers\Url::to(['edit','uid'=>$v['uid']]) ?>">修改</a>
                <a href="<?=\yii\helpers\Url::to(['delete','uid'=>$v['uid']]) ?>">删除</a>
            </td>
        </tr>
    <?php endforeach ?>

</table>