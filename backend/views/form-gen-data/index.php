<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormGenDataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Form Gen Datas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-gen-data-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Form Gen Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'field_data:ntext',
            'created_at',
            'field_gen_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
