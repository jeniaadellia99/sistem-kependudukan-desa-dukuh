<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use app\components\Helper;

/* @var $this yii\web\View */
/* @var $model app\models\DataKematian */

$this->title = "Detail Data Kematian " . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Data Kematians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-kematian-view box box-primary">

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
            [
            'attribute' => 'id_jk',
            'value' => $model->jk->nama,
            ],
            [
                'attribute' => 'umur',
                'value' => $model->umur . '  (Tahun)'
            ],
            'tempat_lahir',
            [
                'attribute' => 'tgl_lahir',
                'format' => 'date',
                'value' => $model->tgl_lahir,
                
            ],
            [
                'attribute' => 'tgl_lahir',
                'format' => 'date',
                'value' => $model->tgl_lahir,
                
            ],
            'alamat',
        ],
    ]) ?>

 <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Data Kematian', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Kembali', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
      
    </div>
</div>

