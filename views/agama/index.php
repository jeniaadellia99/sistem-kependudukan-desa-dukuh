<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AgamaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agama';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agama-index box box-primary">

    <div class="box-header">
        <?= Html::a('Tambah Agama', ['create'], ['class' => 'btn btn-success']) ?>
       
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'No.',
                'headerOptions' => ['style' => 'text-align:center'],
                'contentOptions' => ['style' => 'text-align:center']
            ],

            ['attribute' => 'nama',
             'headerOptions' => ['style' => 'text-align:center'],
             'contentOptions' => ['style' => 'text-align:center']
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
