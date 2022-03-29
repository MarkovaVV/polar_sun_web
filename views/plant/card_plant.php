<?php
    use yii\helpers\Url;
    use yii\bootstrap4\Html;
    $this->registerCssFile("@web/css/for_plant.css",['rel' => 'stylesheet',], 'for_plant');

    $plant_id = $plant['id'];
    $plant_id_info = $plant['id']."_info";
?>

<div class='card_p' onclick='show(event, <?php echo "\"$plant_id\""; ?>, <?php echo "\"$plant_id_info\""; ?>)'>
    <div>
        <h4><?php echo $plant['name']; ?></h4>
        <h5><?php echo $plant['latin']; ?></h5>
    </div>
    <div class='img_card cent'>
        <img id="<?php echo $plant['id']; ?>" class="img_p" vis="1">
        <script>
            document.getElementById(`<?php echo $plant['id']; ?>`).src = `data:image/png;base64, <?php echo $plant["photo"] ?>` 
        </script>
    </div>
    <div class='info' id="<?php echo $plant['id']; ?>_info" vis="0">
        <ul>
            <li>ID: <?php echo $plant['id']; ?></li>
            <li>Семейство: <?php echo $plant['family']; ?></li>
            <li>Место сбора: <?php echo $plant['place']; ?></li>
            <li>Местообитание: <?php echo $plant['habitat']; ?></li>
            <li>Дата: <?php echo $plant['date']; ?></li>
            <li>Собрал: <?php echo $plant['collector']; ?></li>
            <li>Определил: <?php echo $plant['determinate']; ?></li>
        </ul>
    </div>
    <p class="links_comment">
        <?php 
            echo Html::a('Оставить комментарий', Url::toRoute(['comments/index', 'id' => $plant["id"]]));
        ?>
    </p>
</div>

