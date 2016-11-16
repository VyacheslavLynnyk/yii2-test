<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Форма приложения</h1>
        <?= Html::a('Заполнить', ['app-form/create'], ['class' => 'btn btn-success']) ?>
    </div>


</div>
