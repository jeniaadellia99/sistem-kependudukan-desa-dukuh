<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\SuratKetDesa */

$this->title = "DETAIL SURAT KETERANGAN DESA";
$this->params['breadcrumbs'][] = ['label' => 'Surat Ket Desa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-ket-desa-view box box-primary">

   <div class="box-header">

    </div>

<div class="box-body">

    <?php if (User::isAdmin()) { ?>

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
            'id',
            'nama',
           
            [
                'attribute' => 'tgl_lahir',
                'format' => 'date',
                'value' => $model->tgl_lahir,
                
            ],
            'nik',
            'pekerjaan',
            'alamat',
             'tujuan',
             [
                'label'=>'download berkas',
                'format' => 'raw',
                'value' =>  Html::a('<i class="fa fa-print"></i> Download Surat', ['pdf', 'id' => $model->id], ['class' => 'btn btn-warning btn-flat','target' => '_blank']) 
            ],

        ],
    ]) ?>

</div>
 <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Surat Keterangan Desa', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Kembali', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
      
    </div>
</div>

 <?php } elseif (User::isWarga()) { ?>

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
            'id',
            'nama',
           
            [
                'attribute' => 'tgl_lahir',
                'format' => 'date',
                'value' => $model->tgl_lahir,
                
            ],
            'nik',
            'pekerjaan',
            'alamat',
             'tujuan',
             [
                'label'=>'download berkas',
                'format' => 'raw',
                'value' =>  Html::a('<i class="fa fa-print"></i> Download Surat', ['pdf', 'id' => $model->id], ['class' => 'btn btn-warning btn-flat','target' => '_blank']) 
            ],

        ],
    ]) ?>

<?php } ?>
