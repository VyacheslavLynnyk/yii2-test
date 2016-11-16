<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AppForm */

$this->title = 'Create App Form';
$this->params['breadcrumbs'][] = ['label' => 'App Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
