<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AppForm */

$this->title = 'Update App Form: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'App Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-form-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (strtolower($model->status) == 'not processed') {
            $model->status = 'PROCESSED';
            $model->save();
        }
    ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
