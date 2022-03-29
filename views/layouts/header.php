<?php
    use yii\bootstrap4\Html;
?>

<div class="container">
    <div class="hat">
        <img src="img/logo.svg" alt="Polar sun">
        <ul class="menu">
            <li>
                <?= Html::a('Главная', ['/site/index']) ?>
            </li>
            <div class="products">
                <li><a href="#">Продукты</a><span id="sp" class="title"></span>
                    <ul class="sub_menu">
                        <li><?= Html::a('Цифровой гербарий', ['/plant/index']) ?></li>
                        <li><?= Html::a('Ботанические сады Мурманской области', ['/site/placeholder']) ?></li>
                    </ul>
                </li>
            </div>
            <li>
                <?= Html::a('О нас', ['/site/about']) ?>
            </li>
            <li>
                <!-- <?= Html::a('Авторизация', ['/site/login']) ?> -->
                <?= Yii::$app->user->isGuest ?  Html::a('Авторизация', ['/site/login']) :  Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Выйти',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm() ?>
            </li>
        </ul>
    </div>
</div>