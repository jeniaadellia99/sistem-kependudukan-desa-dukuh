<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\components\Helper;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SuratKetUsahaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Ket Usaha';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-ket-usaha-index box box-primary">

   <div class="box-header">
        <?= Html::a('Tambah Data Surat Ket Usaha', ['create'], ['class' => 'btn btn-success']) ?>
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
            'nik',
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
            //'id_jk',
            //'id_status',
            //'alamat',
            //'tujuan_usaha',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
