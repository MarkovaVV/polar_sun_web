<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Plant */
$this->registerCssFile("@web/css/for_comment.css",['rel' => 'stylesheet',], 'for_comments');
$this->title = 'Создание новой записи';
?>
<div class="plant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
