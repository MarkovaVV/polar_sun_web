<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О нас';
$this->registerCssFile("@web/css/about.css",['rel' => 'stylesheet',], 'about_members');
?>

<script>
    function hide(e,info_id,img_id){
        document.getElementById(info_id).style.opacity='100%';
        document.getElementById(img_id).style.opacity='7%';
    }

    function show(e,info_id,img_id){
        document.getElementById(info_id).style.opacity='0%';
        document.getElementById(img_id).style.opacity='100%';
    }
</script>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Проект выполнен студентами Мурманского Арктического Государственного Университета в рамках дисциплины "Университетский проект".
    </p>

    <h3>Участники проекта</h3>
    <div class="card_member_bio">
        <div class="member_1" onmouseover="hide(event, 'member1_info', 'img_member1')" onmouseout="show(event, 'member1_info', 'img_member1')">
            <img src="img/Surovets.jpg" class="img_member" id="img_member1">
            <p class="name_member">Суровец Валерия<br>Михайловна</p>
            <ul class="member_info" id="member1_info">
                <li>Направление: гидробиология и ихтиология</li>
                <li>Роль: аналитик</li>
                <li>Ответственность: поиск информации</li>
            </ul>
        </div>
        <div class="member_2" onmouseover="hide(event, 'member2_info', 'img_member2')" onmouseout="show(event, 'member2_info', 'img_member2')">
            <img src="img/Moiseeva.jpg" class="img_member" id="img_member2">
            <p class="name_member">Моисеева Нина<br>Евгеньевна</p>
            <ul class="member_info" id="member2_info">
                <li>Направление: гидробиология и ихтиология</li>
                <li>Роль: аналитик</li>
                <li>Ответственность: поиск информации</li>
            </ul>
        </div>
    </div>
    <div class="card_member_inf">
        <div class="member_3" onmouseover="hide(event, 'member3_info', 'img_member3')" onmouseout="show(event, 'member3_info', 'img_member3')">
            <img src="img/Baginskii.jpg" class="img_member" id="img_member3">
            <p class="name_member">Багинский Денис<br>Александрович</p>
            <ul class="member_info" id="member3_info">
                <li>Направление: прикладная математика и информатика</li>
                <li>Роль: программист</li>
                <li>Ответственность: создание мобильного приложения</li>
            </ul>
        </div>
        <div class="member_4" onmouseover="hide(event, 'member4_info', 'img_member4')" onmouseout="show(event, 'member4_info', 'img_member4')">
            <img src="img/Projerin.jpg" class="img_member" id="img_member4">
            <p class="name_member">Прожерин Дмитрий<br>Александрович</p>
            <ul class="member_info" id="member4_info">
                <li>Направление: прикладная математика и информатика</li>
                <li>Роль: программист</li>
                <li>Ответственность: создание первой версии сайта</li>
            </ul>
        </div>
        <div class="member_5" onmouseover="hide(event, 'member5_info', 'img_member5')" onmouseout="show(event, 'member5_info', 'img_member5')">
            <img src="img/Markova.jpg" class="img_member" id="img_member5">
            <p class="name_member">Маркова Варвара<br>Вячеславовна</p>
            <ul class="member_info" id="member5_info">
                <li>Направление: прикладная математика и информатика</li>
                <li>Роль: программист, веб-дизайнер</li>
                <li>Ответственность: разработка веб-дизайна, создание сайта</li>
            </ul>
        </div>
    </div>
</div>