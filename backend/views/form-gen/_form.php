<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormGen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-gen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'form_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'field_type')->dropDownList([ 'INPUT' => 'INPUT', 'DATE' => 'DATE', 'CHECKBOX' => 'CHECKBOX', 'OPTION' => 'OPTION', 'TEXTAREA' => 'TEXTAREA', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'field_def')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'field_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'field_require')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
