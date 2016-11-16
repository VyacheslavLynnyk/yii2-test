<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Формы для заполнения';

if (Yii::$app->session->hasFlash('success')) {
    Yii::$app->session->getFlash('success');
}

?>
<h1> Формы: </h1>
<ul>
<?php foreach ($formsModel as $form) : ?>
    <li><?= Html::a($form->form_name, ['form-gen-data/create', 'id' => $form->id]); ?></li>
<?php endforeach; ?>
</ul>