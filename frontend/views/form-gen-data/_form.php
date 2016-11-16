<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\FormGenData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-gen-data-form">

    <?php $form = ActiveForm::begin(); ?>

    


    <?php
    switch (strtolower($formGen->field_type)) {
        case 'input' : echo $form->field($model, 'field_data')->textInput(['rows' => 6]);
                break;

        case 'textarea' : echo $form->field($model, 'field_data')->textarea(['rows' => 6]);
            break;

        case 'checkbox' : echo $form->field($model, 'field_data')->checkbox(['rows' => 6]);
            break;

        case 'date' : echo $form->field($model, 'field_data')->widget(
            DatePicker::className(), [
            'inline' => false,
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
        ]);

            break;
        case 'option' : echo $form->field($model, 'field_data')->textarea(['rows' => 6]);
            break;


    }
    
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
