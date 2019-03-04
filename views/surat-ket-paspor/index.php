<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Jk;
use app\models\Agama;

use app\components\Helper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SuratKetPasporSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Ket Paspor';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-ket-paspor-index box box-primary">

     <div class="box-header">
        <?= Html::a('Tambah Surat Keterangan Paspor', ['create'], ['class' => 'btn btn-success']) ?>
       
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


            'nama',
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
               'attribute' =>'id_agama',
               'filter' => Agama::getList(),
               'headerOptions' => ['style' => 'text-align:center;'],
               'contentOptions' =>['style' => 'text-align:center'],
               'value' => function($data){
                return @$data->agama->nama;
               }
           ],
            'tempat_lahir',
             [
                'attribute' => 'tgl_lahir',
                'format' => 'raw',
                'value' => function($data) {
                    return Helper::getTanggalSingkat($data->tgl_lahir);
                },
                'headerOptions' => ['style' => 'text-align:center; width:100px'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            //'pekerjaan',
            //'alamat',
            //'nama_ortu',
            //'nama_kakek',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
