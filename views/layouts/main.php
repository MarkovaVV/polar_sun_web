<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- <link rel="stylesheet" href="css/main.css"> -->
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

    <?php
    /* NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
		    ['label' => 'Цифровой гербарий', 'url' => ['/plant/index']],
            ['label' => 'О нас', 'url' => ['/site/about']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Авторизация', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end(); */
    ?>
<header id="header" class="header">
    <?php 
        if ($this->title == 'Полярное солнце') {
            echo $this->render('header_index');
        } else {
            echo $this->render('header');
        }
        ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="footer">
    <div class="container">
        <div class="down">
                <a href="https://www.masu.edu.ru/" target="_blank">
                    <image src="img/masu-logo.svg">
                </a>
                <p> © 2021 Полярное солнце </p>
            <div class="links1">
                <a href="https://vk.com/public147265297" target="_blank">
                    <image src="img/vk-logo.svg">    
                </a>
            </div>
            <div class="links2">
                <a href="https://play.google.com/store/apps/details?id=com.bahonika.plant_book" target="_blank">
                    <image src="img/google-play-logo.svg">
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- <footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; My Company <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer> -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
