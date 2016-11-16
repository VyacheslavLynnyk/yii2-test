<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FormGen */

$this->title = 'Create Form Gen';
$this->params['breadcrumbs'][] = ['label' => 'Form Gens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-gen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
