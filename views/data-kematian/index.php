<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\components\Helper;
use app\models\Jk;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DataKematianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Kematian';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-kematian-index box box-primary">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="box-header">
         <?= Html::a('Tambah Data Kematian', ['create'], ['class' => 'btn btn-success']) ?>  
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
            'nama',
            [
                'attribute' => 'umur',
                'value' => function($data){
                return @$data->umur . ('tahun');
               }
            ],
             [
               'attribute' =>'id_jk',
               'filter' => Jk::getList(),
               'headerOptions' => ['style' => 'text-align:center;'],
               'contentOptions' => ['style' => 'text-align:center'],
               'value' => function($data){
                return @$data->jk->nama;
               }
           ],
            'tempat_lahir',
            [
                'attribute' => 'tgl_lahir',
                'format' => 'raw',
                'value' => function($data) {
                    return Helper::getTanggalSingkat($data->tgl_lahir);
                },
                
            ],
             [
                'attribute' => 'tgl_meninggal',
                'format' => 'raw',
                'value' => function($data) {
                    return Helper::getTanggalSingkat($data->tgl_meninggal);
                },
                
            ],
            //'alamat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
