<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\components\Helper;
use app\models\Jk;
use app\models\Agama;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DataLahirSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Lahir';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-lahir-index box box-primary">

   
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="box-header">
        <?= Html::a('Tambah Data Lahir', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-print"></i> Export Pdf', Yii::$app->request->url.'&export-pdf=1', ['class' => 'btn btn-danger btn-flat','target' => '_blank']) ?> 
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

            ['attribute'=>'nama',
            'headerOptions' => ['style'=>'text-align:center'],
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
         
            ['attribute'=>'tempat',
            'headerOptions' => ['style'=>'text-align:center'],
            ],
             [
                'attribute' => 'tgl_lahir',
                'headerOptions' => ['style'=>'text-align:center'],
                'format' => 'raw',
                'value' => function($data) {
                    return Helper::getTanggalSingkat($data->tgl_lahir);
                },
                
            ],
            'nama_ayah',
            'nama_ibu',
           
            ['attribute'=>'alamat',
            'headerOptions' => ['style'=>'text-align:center'],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
