<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\DataPenduduk;
use app\models\DataLahir;
use app\models\DataKematian;
use app\models\SekretarisDesa;
use app\models\Jk;
use app\models\Agama;
use app\models\SuratKetDesa;
use miloschuman\highcharts\Highcharts;
use yii\widgets\LinkPager;
use app\models\User;


$this->title = "Halaman Dashboard";

?>

<!-- DASHBOARD -->
 <?php if (User::isAdmin()) { ?>
<div class="row">
<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-blue">
    <div class="inner">
            <b>Jumlah Data Penduduk</b>
            <h3><?= Yii::$app->formatter->asInteger(DataPenduduk::getCount()); ?></h3>
        </div>
        <div class="icon">
            <i class="fa fa-users"></i>
        </div>
        <a href="<?=Url::to(['data-penduduk/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>

<!-- ./col -->
<div class="col-lg-3 col-xs-6">
    <!-- small box --> 
    <div class="small-box bg-green">
        <div class="inner">
            <b>Jumlah Data Kelahiran</b>
            <h3><?= Yii::$app->formatter->asInteger(DataLahir::getCount()); ?></h3>
        </div>
        <div class="icon">
            <i class="fa fa-users"></i>
        </div>
        <a href="<?=Url::to(['data-lahir/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-3 col-xs-6">
    <!-- small box --> 
    <div class="small-box bg-red">
        <div class="inner">
            <b>Jumlah Data Kematian</b>
            <h3><?= Yii::$app->formatter->asInteger(DataKematian::getCount()); ?></h3>
        </div>
        <div class="icon">
            <i class="fa fa-users"></i>
        </div>
        <a href="<?=Url::to(['data-kematian/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-3 col-xs-6">
    <!-- small box --> 
    <div class="small-box bg-yellow">
        <div class="inner">
            <b>Sekretaris Desa</b>
            <h3><?= Yii::$app->formatter->asInteger(SekretarisDesa::getCount()); ?></h3>
        </div>
        <div class="icon">
            <i class="fa fa-users"></i>
        </div>
        <a href="<?=Url::to(['rt/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>

<!-- GRAFIK -->
 <!--  -->
    <div class="row">
      <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Penduduk</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
            </div>
            <div class="box-body">
                <?=Highcharts::widget([
                    'options' => [
                        'credits' => false,
                        'title' => ['text' => 'Berdasarkan Jenis Kelamin'],
                        'exporting' => ['enabled' => true],
                        'plotOptions' => [
                            'pie' => [
                                'cursor' => 'pointer',
                            ],
                        ],
                        'series' => [
                            [
                                'type' => 'pie',
                                'name' => 'Jenis Kelamin',
                                'data' => jk::getGrafikList(),
                            ],
                        ],
                    ],
                ]);?>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Penduduk</h3>
            </div>
            <div class="box-body">
                <?=Highcharts::widget([
                    'options' => [
                        'credits' => false,
                        'title' => ['text' => 'Berdasarkan Agama'],
                        'exporting' => ['enabled' => true],
                        'plotOptions' => [
                            'pie' => [
                                'cursor' => 'pointer',
                            ],
                        ],
                        'series' => [
                            [
                                'type' => 'pie',
                                'name' => 'Agama',
                                'data' => Agama::getGrafikList(),
                            ],
                        ],
                    ],
                ]);?>
        </div>
    </div>
</div>
 <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Kelahiran</h3>
            </div>
            <div class="box-body">
                <?=Highcharts::widget([
                    'options' => [
                        'credits' => false,
                        'title' => ['text' => 'Berdasarkan Jenis Kelamin'],
                        'exporting' => ['enabled' => true],
                        'plotOptions' => [
                            'pie' => [
                                'cursor' => 'pointer',
                            ],
                        ],
                        'series' => [
                            [
                                'type' => 'pie',
                                'name' => 'Jenis Kelamin',
                                'data' => Jk::getGrafikListDua(),
                            ],
                        ],
                    ],
                ]);?>
        </div>
    </div>
</div>
<div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Kematian</h3>
            </div>
            <div class="box-body">
                <?=Highcharts::widget([
                    'options' => [
                        'credits' => false,
                        'title' => ['text' => 'Berdasarkan Jenis Kelamin'],
                        'exporting' => ['enabled' => true],
                        'plotOptions' => [
                            'pie' => [
                                'cursor' => 'pointer',
                            ],
                        ],
                        'series' => [
                            [
                                'type' => 'line',
                                'name' => 'Jenis Kelamin',
                                'data' => Jk::getGrafikListDua(),
                            ],
                        ],
                    ],
                ]);?>
        </div>
    </div>
</div>
</div>

 <?php } elseif (User::isWarga()) { ?>
    

<div class="row">
   
   
<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-teal">
    <div class="inner">
            <h1 align="center">Surat Keterangan Tidak Mampu</h1>
            <h3></h3>
        </div>
       
        <?= Html::a('<i class="fa fa-file"> Isi Form</i>', ['surat-ket-desa/create'], [
                       'class' => 'btn btn-primary',
                       'data' => [
                           'confirm' => 'Apa anda yakin ingin membuat surat Keterangan tidak mampu?',
                           'method' => 'post',
                       ],
                   ]) ?>
</div>
</div>

<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-teal">
    <div class="inner">
            <h1 align="center">Surat Keterangan Tanah</h1>
            <h3></h3>
        </div>
       
        <?= Html::a('<i class="fa fa-file"> Isi Form</i>', ['surat-tanah/create'], [
                       'class' => 'btn btn-primary',
                       'data' => [
                           'confirm' => 'Apa anda yakin ingin membuat surat Keterangan Tanah?',
                           'method' => 'post',
                       ],
                   ]) ?>
    </div>
</div>

<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-teal">
    <div class="inner">
            <h1 align="center">Surat Keterangan Usaha</h1>
            <h3></h3>
        </div>
       
        <?= Html::a('<i class="fa fa-file"> Isi Form</i>', ['surat-ket-usaha/create'], [
                       'class' => 'btn btn-primary',
                       'data' => [
                           'confirm' => 'Apa anda yakin ingin membuat Surat Keterangan Usaha?',
                           'method' => 'post',
                       ],
                   ]) ?>

            </div>
        </div>

    <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-teal">
    <div class="inner">
            <h1 align="center">Surat Keterangan Izin Orangtua</h1>
            <h3></h3>
        </div>
       
        <?= Html::a('<i class="fa fa-file"> Isi Form</i>', ['surat-izin-ortu/create'], [
                       'class' => 'btn btn-primary',
                       'data' => [
                           'confirm' => 'Apa anda yakin ingin membuat surat Keterangan Izin Orangtua?',
                           'method' => 'post',
                       ],
                   ]) ?>

            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-teal">
    <div class="inner">
            <h1 align="center">Surat Keterangan Paspor</h1>
            <h3></h3>
        </div>
       
        <?= Html::a('<i class="fa fa-file"> Isi Form</i>', ['surat-ket-paspor/create'], [
                       'class' => 'btn btn-primary',
                       'data' => [
                           'confirm' => 'Apa anda yakin ingin membuat surat Keterangan Paspor?',
                           'method' => 'post',
                       ],
                   ]) ?>

            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-teal">
    <div class="inner">
            <h1 align="center">Surat Keterangan Wali</h1>
            <h3></h3>
        </div>
       
        <?= Html::a('<i class="fa fa-file"> Isi Form</i>', ['surat-wali/create'], [
                       'class' => 'btn btn-primary',
                       'data' => [
                           'confirm' => 'Apa anda yakin ingin membuat surat Keterangan Wali?',
                           'method' => 'post',
                       ],
                   ]) ?>

            </div>
        </div>
       </div>
    <!-- small box -->
    
            <?php } ?>









