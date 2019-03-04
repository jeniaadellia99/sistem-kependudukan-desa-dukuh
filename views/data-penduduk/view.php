<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use app\components\Helper;

/* @var $this yii\web\View */
/* @var $model app\models\DataPenduduk */
$this->title = "DETAIL DATA PENDUDUK";
$this->params['breadcrumbs'][] = ['label' => 'Data Penduduk', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-penduduk-view box box-primary">

<div class="box-header">
        <h3 class="box-title">Detail Data Penduduk</h3>
    </div>

<div class="box-body">
    
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
            [
                'attribute' => 'umur',
                'format' =>'raw',
                'value' => $model->umur . '  (Tahun)',
            ],
            'tempat_lahir',
            [
                'attribute' => 'tgl_lahir',
                'format' => 'date',
                'value' => $model->tgl_lahir,
                
            ],
            [
            'attribute' => 'id_agama',
            'value' => @$model->agama->nama,
            ],
            [
            'attribute' => 'id_jk',
            'value' => @$model->jk->nama,
            ],
           
           [
            'attribute' => 'id_statuswrg',
            'value' => @$model->statuswrg->nama,
            ],
            'alamat',
            'pekerjaan',
            [
                'group' => true,
                'label' => 'Data Pendukung',
                'rowOptions' => ['class' => 'bg-blue'],
                //'groupOptions' => ['class' => 'text-center']
            ],
            'nama_kpl',
        ],
    ]) ?>

</div>
 <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Data Penduduk', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Kembali', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>
</div>
