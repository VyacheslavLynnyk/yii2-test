<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\FormGenData */
/* @var $form yii\widgets\ActiveForm */

if (Yii::$app->session->hasFlash('danger')) : ?>
    <?php Yii::$app->session->getFlash('danger'); ?>
<?php endif ; ?>

<div class="form-gen-data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    switch (strtolower($formGen->field_type)) {
        case 'input' :
            echo $form->field($model, 'field_data')->textInput([
                'value' => $formGen->field_def,
                'placeholder' => $formGen->field_place,
            ]);
            break;

        case 'textarea' : echo $form->field($model, 'field_data')->textarea([
                'rows' => 6,
                'value' => $formGen->field_def,
                'placeholder' => $formGen->field_place,
            ]);
            break;

        case 'checkbox' : echo $form->field($model, 'field_data')->checkbox([
            'value' => $formGen->field_def,
            'placeholder' => $formGen->field_place,
        ]);
            break;

        case 'date' :
            $model->field_data = $formGen->field_def ?? '';
            echo $form->field($model, 'field_data')->widget(
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
