<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use app\models\SuratWali;


/* @var $this yii\web\View */
/* @var $model app\models\SuratWali */

$this->title = "Detail Surat Keterangan Wali";
$this->params['breadcrumbs'][] = ['label' => 'Surat Wali', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-wali-view box box-primary">


    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'group' => true,
                'label' => 'Data Pemohon',
                'rowOptions' => ['class' => 'bg-orange'],
                //'groupOptions' => ['class' => 'text-center']
            ],
          
            'nama',
            'tempat_lahir',
            [
                'attribute' => 'tgl_lahir',
                'format' => 'date',
                'value' => $model->tgl_lahir,
                
            ],
            'nik',
            'alamat',
            'tujuan',
             [
                'label'=>'download berkas',
                'format' => 'raw',
                'value' =>  Html::a('<i class="fa fa-print"></i> Download Surat', ['pdf', 'id' => $model->id], ['class' => 'btn btn-warning btn-flat','target' => '_blank']) 
            ],
        ],
    ]) ?>

 <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Permohonan Wali', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Kembali', ['create'], ['class' => 'btn btn-warning btn-flat']) ?>
      
    </div>
</div>

