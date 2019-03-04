<?php

use yii\helpers\Html;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SuratIzinOrtu */

$this->title = "DETAIL SURAT IZIN ORANG TUA";
$this->params['breadcrumbs'][] = ['label' => 'Surat Izin Ortu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-izin-ortu-view box box-primary">

    

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'group' => true,
                'label' => 'Data Orang Tua',
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
            [
                'attribute' => 'id_jk',
                'format' => 'raw',
                'value' => @$model->jk->nama,
            ],
            'pekerjaan',
            'alamat',
             [
                'group' => true,
                'label' => 'Data Anak',
                'rowOptions' => ['class' => 'bg-orange'],
                //'groupOptions' => ['class' => 'text-center']
            ],
            'nama_anak',
            'tempat_lahir_anak',
             [
                'attribute' => 'tgl_lahir_anak',
                'format' => 'date',
                'value' => $model->tgl_lahir_anak,
                
            ],
            [
                'attribute' => 'id_jk_anak',
                'format' => 'raw',
                'value' => @$model->jk->nama,
            ],
            'bekerja_di',
            'sebagai',
            [
                'label'=>'download berkas',
                'format' => 'raw',
                'value' =>  Html::a('<i class="fa fa-print"></i> Download Surat', ['pdf', 'id' => $model->id], ['class' => 'btn btn-warning btn-flat','target' => '_blank']) 
            ],
        ],
    ]) ?>

</div>
 <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Surat Izin Orang Tua', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Kembali', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
      
    </div>
</div>
