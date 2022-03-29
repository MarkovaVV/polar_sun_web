<?php

/* @var $this yii\web\View */

$this->title = 'Полярное солнце';
use yii\bootstrap4\Html;
$this->registerCssFile("@web/css/index.css",['rel' => 'stylesheet',], 'index');
?>
<section id="about" class="about">
        <div class="container">
            <h2>О проекте</h2>
            <img src="img/logo_project.svg" alt="ps" class="logo">
            <div class="inf1">
                <p>"Полярное солнце" - это проект,<br>
                    направленный на биоразнообразие <br>
                    мурманской области. </p>
            </div>
            <div class="inf2">
                <p>На сайте размещён цифровой гербарий <br>
                    МАГУ, включающий коллекцию растений, <br>
                    произрастающих на территории <br>
                    Мурманской области и собранных <br>
                    исследователями нашего вуза во время <br>
                    экспедиций.</p>
            </div>
        </div>
    </section>
    <section id="navigation" class="navigation">
        <div class="container">
            <h2>Навигация по сайту</h2>
            <div class="nav_card">
                <a href='?r=plant/index'>
                    <div class="form_b2">
                        <div target="_blank">
                            <button class="button">
                                <image src="img/img1.svg">
                                <p>
                                    Цифровой гербарий<br>МАГУ
                                </p>
                            </button>
                        </div>
                    </div>
                </a>
                <a href='?r=site/placeholder'>
                    <div class="form_b3">
                        <div target="_blank">
                            <button class="button">
                                <image src="img/img2.svg">
                                <p>
                                    Ботанические сады<br>Мурманской области
                                </p>
                            </button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>