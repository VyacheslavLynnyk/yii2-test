<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FormGen */

$this->title = 'Update Form Gen: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Gens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form-gen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
