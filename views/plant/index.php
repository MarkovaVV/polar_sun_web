<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PlantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Цифровой гербарий';
$this->registerCssFile("@web/css/for_plant.css",['rel' => 'stylesheet',], 'for_plant');
?>

<script>
    function show(e,img_plant,info_plant){
        let inf_p = document.getElementById(info_plant);
        let image_p = document.getElementById(img_plant);
        if(image_p.getAttribute('vis')=="1"){
            inf_p.style.opacity='100%';
            image_p.style.opacity='0%';
            image_p.setAttribute('vis', "0");
        } else {
            inf_p.style.opacity='0%';
            image_p.style.opacity='100%';
            image_p.setAttribute('vis', "1");
        }
    }
</script>

<div class="plant-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="p_cent">
        <?= Html::a('Создать новую запись', ['create'], ['class' => 'btn_2 btn-success']) ?>
    </p>

    <div class="cards">
        <?php
            $rows = (new \yii\db\Query())
            ->select(['name', 'latin', 'id', 'family', 'place', 'habitat', 'date', 'collector', 'determinate', "TO_BASE64(photo) as photo"])
            ->from('Plant')
            ->all(); 
            foreach ($rows as $key => $value) {
                echo $this -> render('card_plant', ['plant'=>$value]);
            }
        ?>
    </div>

    <?php /* echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'latin',
            'family',
            'place',
            'habitat',
            'date',
            'collector',
            'determinate',
            //'general:ntext',
            //'photo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); */ ?> 


</div>