<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Добро пожаловать!</h1>

    </div>

    <div class="body-content">

        <div class="row text-center">
            <div class="col-lg-6">
                <h3>Генератор форм</h3>
                <p>
                    <?= Html::a('Смотреть', ['form-gen/index'], ['class' => 'btn btn-success']) ?>
                </p>
            </div>
            <div class="col-lg-6">
                <h3>Данные пользователей</h3>
                <p>
                    <?= Html::a('Смотреть', ['form-gen/index'], ['class' => 'btn btn-success']) ?>
                </p>
            </div>
        </div>

    </div>
</div>
