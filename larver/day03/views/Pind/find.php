<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/8
 * Time: 11:10
 */
?>

<table border="1">
    <tr>
        <td>内容</td>
    </tr>

    <?php foreach ($data as $v):?>
        <tr>
            <td><?=\yii\helpers\Html::encode('count')?></td>
        </tr>

    <?php endforeach;?>
</table>
