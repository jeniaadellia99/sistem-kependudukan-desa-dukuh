<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\SuratTanahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Tanah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-tanah-index box box-primary">
     <div class="box-header">
        <?= Html::a('Tambah Surat Tanah', ['create'], ['class' => 'btn btn-success']) ?>
       
    </div>


    <div class="box-body">
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
            ],
            'no_persil',
            
            
            // 'letak_tanah',
            // 'luas_tanah',
            //'min_harga_tanah',
            //'max_harga_tanah',
            //'luas_bangunan',
            //'harga_bangunan',
            //'tanah',
            //'bangunan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
