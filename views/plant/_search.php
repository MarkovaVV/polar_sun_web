<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlantSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'latin') ?>

    <?= $form->field($model, 'family') ?>

    <?= $form->field($model, 'place') ?>

    <?php // echo $form->field($model, 'habitat') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'collector') ?>

    <?php // echo $form->field($model, 'determinate') ?>

    <?php // echo $form->field($model, 'general') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
