<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\number\NumberControl;
use app\models\SuratTanah;
use app\models\SuratTanahSearch;
use yii\web\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\SuratTanah */

$this->title = "DETAIL PEMBUATAN SURAT TANAH";
$this->params['breadcrumbs'][] = ['label' => 'Surat Tanah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-penduduk-view box box-primary">

<div class="box-header">

    </div>

<div class="box-body">

   

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'group' => true,
                'label' => 'Data Tanah',
                'rowOptions' => ['class' => 'bg-red'],
                //'groupOptions' => ['class' => 'text-center']
            ],
            
            'no_persil',
            'nama',
            'letak_tanah',
            'luas_tanah',
             [
                'attribute' => 'min_harga_tanah',
                'value' =>'  Rp. '. $model->min_harga_tanah
            ],
             [
                'attribute' => 'max_harga_tanah',
                'value' =>'  Rp. '. $model->max_harga_tanah
            ],
            [
                'attribute' => 'luas_bangunan',
                'value' => $model->luas_bangunan . ' /m2'
            ],
            //  [
            //     'attribute' => 'harga_bangunan',
            //     'value' =>'  Rp. '. $model->harga_bangunan . ' /m2'
            // ],
            'harga_bangunan',
             [
                'attribute' => 'tanah',
                'value' =>'  Rp. '. $model->tanah . ' /m2'
            ],
            [
                'attribute' => 'bangunan',
                'value' =>'  Rp. '. $model->bangunan . ' /m2'
            ],
            [
                'label'=>'download berkas',
                'format' => 'raw',
                'value' =>  Html::a('<i class="fa fa-print"></i> Download Surat', ['pdf', 'id' => $model->id], ['class' => 'btn btn-warning btn-flat','target' => '_blank']) 
            ],
        ],
    ]) ?>

    

</div>
 <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Surat Tanah', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Kembali', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
       
    </div>
</div>
