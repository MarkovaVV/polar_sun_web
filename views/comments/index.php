<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CommentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->registerCssFile("@web/css/for_comment.css",['rel' => 'stylesheet',], 'for_comments');
$this->title = 'Комментарии';
?>
<div class="comments-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
        if (isset($model)){
            $plant_id = $model->id;
            if (!$plant_id){
                $plant_id =  $_GET['id'];
            }
        }else{
            $plant_id =  $_GET['id'];
        }
        $rows = (new \yii\db\Query())
        ->select(['name', 'latin', 'id', 'family', 'place', 'habitat', 'date', 'collector', 'determinate', "TO_BASE64(photo) as photo"])
        ->from('Plant')
        ->where (['id'=>$plant_id])
        ->one();
        $plant_name =  $rows['name'];
    ?>

    <div class='card_p'>
        <div class='img_card_p'>
            <img id="<?php echo $rows['id']; ?>" class="img_p">
            <script>
                document.getElementById(`<?php echo $rows['id']; ?>`).src = `data:image/png;base64, <?php echo $rows["photo"] ?>` 
            </script>
        </div>
        <div class='info'>
            <div>
                <h3><?php echo $rows['name']; ?></h3>
                <h4><?php echo $rows['latin']; ?></h4>
            </div>
            <ul>
                <li>ID: <?php echo $rows['id']; ?></li>
                <li>Семейство: <?php echo $rows['family']; ?></li>
                <li>Место сбора: <?php echo $rows['place']; ?></li>
                <li>Местообитание: <?php echo $rows['habitat']; ?></li>
                <li>Дата: <?php echo $rows['date']; ?></li>
                <li>Собрал: <?php echo $rows['collector']; ?></li>
                <li>Определил: <?php echo $rows['determinate']; ?></li>
            </ul>
        </div>
    </div>

    <div class="comments-create">

        <?php
            
            if (isset($model)){
            }else{
                $model = new \app\models\Comments;
                $model -> plant=$plant_id;
            }
        ?>

        <?= Yii::$app->user->isGuest ? '' : $this->render('_form', [
            'model' => $model, 
            'plant_id' => $plant_id,
        ]) ?>

    </div>

    <hr>
    <p class='comment_users'>Комментарии к растению</p>
    
    <?php
        $rows = (new \yii\db\Query())
        ->select(['id', 'comment', 'plant', '(select firstname from user where user.id = comments.user) as user'])
        ->from('Comments')
        ->where (['plant'=>$plant_id])
        ->all();
        foreach ($rows as $key => $value) {
            echo $this -> render('comment_plant', ['comment'=>$value]);
        }
    ?>

    <?php /* // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'comment:ntext',
            [
                'attribute'=>'plant',
                'filter'=>[
                    'id'=>$plant_id,
                ]
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    echo $action;
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); */
    ?>


</div>
