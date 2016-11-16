<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FormGenData */

$this->title = 'Create Form Gen Data';
$this->params['breadcrumbs'][] = ['label' => 'Form Gen Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-gen-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'formGen' => $formGen
    ]) ?>

</div>
