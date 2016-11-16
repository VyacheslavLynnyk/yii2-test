<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormGenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Form Gens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-gen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Form Gen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'form_name',
            'field_type',
            'field_def',
            'field_place',
            'field_require',
            'status' => [
                'value' => function ($model) {
                    return ((int) $model->status === 1) ? 'Active' : 'Passive' ;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
