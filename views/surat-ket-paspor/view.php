<?php

use yii\helpers\Html;
use kartik\detail\DetailView;


/* @var $this yii\web\View */
/* @var $model app\models\SuratKetPaspor */

$this->title = "Surat Keterangan Pembuatan Paspor";
$this->params['breadcrumbs'][] = ['label' => 'Surat Ket Paspor', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-ket-paspor-view box box-primary">


    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'group' => true,
                'label' => 'Data Individu',
                'rowOptions' => ['class' => 'bg-green'],
                //'groupOptions' => ['class' => 'text-center']
            ],
            'nama', 
            [
            'attribute' => 'id_jk',
            'value' => @$model->jk->nama,
            ],
             [
            'attribute' => 'id_agama',
            'value' => @$model->agama->nama,
            ],
            'tempat_lahir',
             [
                'attribute' => 'tgl_lahir',
                'format' => 'date',
                'value' => $model->tgl_lahir,
                
            ],
            'pekerjaan',
            'alamat',
             [
                'group' => true,
                'label' => 'Data Tambahan',
                'rowOptions' => ['class' => 'bg-green'],
                //'groupOptions' => ['class' => 'text-center']
            ],
            'nama_ortu',
            'nama_kakek',
            [
                'label'=>'download berkas',
                'format' => 'raw',
                'value' =>  Html::a('<i class="fa fa-print"></i> Download Surat', ['pdf', 'id' => $model->id], ['class' => 'btn btn-warning btn-flat','target' => '_blank']) 
            ]
        ],
    ]) ?>


 <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Surat Pembuatan Paspor', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Kembali', ['create'], ['class' => 'btn btn-warning btn-flat']) ?>
      
    </div>
</div>
