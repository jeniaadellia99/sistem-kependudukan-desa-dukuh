<?php

use yii\helpers\Html;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SuratKetUsaha */

$this->title = "DETAIL SURAT KET USAHA";
$this->params['breadcrumbs'][] = ['label' => 'Surat Ket Usaha', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-ket-usaha-view box box-primary">

 <div class="box-header">

    </div>

<div class="box-body">

<?= DetailView::widget([
       'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'group' => true,
                'label' => 'Data Pemohon',
                'rowOptions' => ['class' => 'bg-red'],
                //'groupOptions' => ['class' => 'text-center']
            ],
            'nama',
            'nik',
            'tempat_lahir',
             [
                'attribute' => 'tgl_lahir',
                'format' => 'date',
                'value' => $model->tgl_lahir,
                
            ],
            [
                'attribute' => 'id_jk',
                'format' => 'raw',
                'value' => @$model->jk->nama,
            ],
            [
                'attribute' => 'id_status',
                'format' => 'raw',
                'value' => @$model->status->nama,
            ],
            'alamat',
            'tujuan_usaha',
             [
                'label'=>'download berkas',
                'format' => 'raw',
                'value' =>  Html::a('<i class="fa fa-print"></i> Download Surat', ['pdf', 'id' => $model->id], ['class' => 'btn btn-warning btn-flat','target' => '_blank']) 
            ],
        ],
    ]) ?>

</div>
 <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Surat Keterangan Usaha', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Kembali', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
      
    </div>
</div>