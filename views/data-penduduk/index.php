<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Jk;
use app\models\Statuswrg;
use app\models\Agama;

use app\components\Helper;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DataPedudukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Penduduk';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-penduduk-index box box-primary">
     <div class="box-header">
        <?= Html::a('Tambah Data Penduduk', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-print"></i> Export Pdf', Yii::$app->request->url.'&export-pdf=1', ['class' => 'btn btn-danger btn-flat','target' => '_blank']) ?> 
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
            ['attribute' => 'nik',
             'headerOptions' => ['style' => 'text-align:center'],
             'contentOptions' => ['style' => 'text-align:center']
            ],
            ['attribute'=> 'nama', 
            'headerOptions' =>['style' => 'text-align:center'],
            'contentOptions' => ['style' => 'text-align:center']
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
            [
                'attribute' => 'umur',
                'headerOptions' => ['style'=> 'text-align:center'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data){
                return @$data->umur . ('tahun');
               }
            ],

            ['attribute'=>'tempat_lahir',
            'headerOptions' => ['style' => 'text-align:center'],
            'contentOptions' => ['style' => 'text-align:center']
            ],
           [
                'attribute' => 'tgl_lahir',
                'format' => 'raw',
                'value' => function($data) {
                    return Helper::getTanggalSingkat($data->tgl_lahir);
                },
                'headerOptions' => ['style' => 'text-align:center; width:100px'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
               'attribute' =>'id_agama',
               'filter' => Agama::getList(),
               'headerOptions' => ['style' => 'text-align:center;'],
               'contentOptions' =>['style' => 'text-align:center'],
               'value' => function($data){
                return @$data->agama->nama;
               }
           ],
            //'gol_darah',

            [
               'attribute' =>'id_statuswrg',
               'filter' => Statuswrg::getList(),
               'headerOptions' => ['style' => 'text-align:center;'],
               'contentOptions' => ['style' => 'text-align:center'],
               'value' => function($data){
                return @$data->statuswrg->nama;
               }
           ],

            ['attribute'=>'alamat',
            'headerOptions' => ['style'=> 'text-align:center'],
            'contentOptions' => ['style' => 'text-align:center'],
            ],

            // ['attribute'=>'pekerjaan',
            // 'headerOptions' => ['style'=>'text-align:center'],
            // 'contentOptions' => ['style' => 'text-align:center'],
            // ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>