<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormGenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-gen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'form_name') ?>

    <?= $form->field($model, 'field_type') ?>

    <?= $form->field($model, 'field_def') ?>

    <?= $form->field($model, 'field_place') ?>

    <?php // echo $form->field($model, 'field_require') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
