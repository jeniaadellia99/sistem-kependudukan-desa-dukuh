<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Jk;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SuratIzinOrtuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Izin Ortu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-izin-ortu-index box box-primary">
     <div class="box-header">
        <?= Html::a('Form Surat Izin Orangtua', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'tempat_lahir',
            // 'tgl_lahir',
           [
               'attribute' =>'id_jk',
               'filter' => Jk::getList(),
               'headerOptions' => ['style' => 'text-align:center;'],
               'contentOptions' => ['style' => 'text-align:center'],
               'value' => function($data){
                return @$data->jk->nama;
               }
           ],
            //'pekerjaan',
            //'alamat',
            'nama_anak',
            //'tempat_lahir_anak',
            //'tgl_lahir_anak',
            [
               'attribute' =>'id_jk_anak',
               'filter' => Jk::getList(),
               'headerOptions' => ['style' => 'text-align:center;'],
               'contentOptions' => ['style' => 'text-align:center'],
               'value' => function($data){
                return @$data->jk->nama;
               }
           ],
            'bekerja_di',
            //'sebagai',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
