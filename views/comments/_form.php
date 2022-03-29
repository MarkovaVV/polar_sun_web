<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-form">

    <?php $form = ActiveForm::begin(['action' => "/web/index.php?r=comments%2Fcreate"]); ?>

    <?= $form->field($model, 'plant')->hiddenInput(['value'=>$plant_id])->label(false); ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 10, 'class'=>'comment_p']) ?>

    <?= $form->field($model, 'user')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label(false); ?>

    <?= Html::submitButton('Сохранить', ['class' => 'btn_4 btn-success block_comment']) ?>

    <?php ActiveForm::end(); ?>

</div>
