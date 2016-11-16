<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FormGenData */

$this->title = 'Update Form Gen Data: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Gen Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form-gen-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
