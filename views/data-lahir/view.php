<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use app\components\Helper;
use app\models\Penduduk;

/* @var $this yii\web\View */
/* @var $model app\models\DataLahir */

$this->title = 'Detail Data Kelahiran '.$model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Data Lahir', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-lahir-view box box-primary">
    <div class="box-header">
      
   

    <?= DetailView::widget([
       'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'group' => true,
                'label' => 'Data Individu',
                'rowOptions' => ['class' => 'bg-red'],
                //'groupOptions' => ['class' => 'text-center']
            ],
           
            'nik',
            'nama',
            'tempat',
             [
                'attribute' => 'tgl_lahir',
                'format' => 'date',
                'value' => $model->tgl_lahir,
                
            ],
             [
            'attribute' => 'id_jk',
            'value' => @$model->jk->nama,
            ],
             [
            'attribute' => 'id_agama',
            'value' => @$model->agama->nama,
            ],
            // [
            //     'attribute' => 'nik_ayah',
            //     'format' =>'raw',
            //     'value' => @$model->penduduk->nik,
            // ],
           //  [
           //     'attribute' =>'nik_ayah',
           //     'headerOptions' => ['style' => 'text-align:center;'],
           //     'value' => function($data){
           //      return @$data->data_penduduk->id;
           //     }
           // ],
            'nama_ayah',
            //  [
            //     'attribute' => 'nik_ibu',
            //     'format' =>'raw',
            //     'value' => @$model->penduduk->nik,
            // ],
            'nama_ibu',
            'alamat',
        ],
    ]) ?>

 <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Data Kelahiran', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Kembali', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
      
    </div>
</div>

