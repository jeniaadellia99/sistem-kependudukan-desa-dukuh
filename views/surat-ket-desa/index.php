<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\components\Helper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SuratKetDesaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Ket Desa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-ket-desa-index box box-primary">
    <div class="box-header">
        <?= Html::a('Form Surat Keterangan Desa', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'nik',
            //'pekerjaan',
            //'alamat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
