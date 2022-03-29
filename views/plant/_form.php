<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Plant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'habitat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'collector')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'determinate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn_4 btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
