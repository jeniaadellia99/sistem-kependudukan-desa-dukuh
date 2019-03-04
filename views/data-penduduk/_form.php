<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use app\models\Agama;
use app\models\Jk;
use app\models\GolDarah;
use app\models\Statuswrg;



/* @var $this yii\web\View */
/* @var $model app\models\DataPenduduk */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin([
    'layout'=>'horizontal',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
    'fieldConfig' => [
        'horizontalCssClasses' => [
           
            'wrapper' => 'col-sm-4',
            'error' => '',
            'hint' => '',
        ],
    ]
]); ?>
<div class="data-penduduk-form box box-primary">

    <div class="box-header">
        <h3 class="box-title">Form Data Penduduk</h3>       
    </div>
        <div class="box-body">

     <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'nik')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'umur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->widget(DatePicker::className(), [
                'removeButton' => false,
                'value' => date('Y-m-d'),
                'options' => ['placeholder' => 'Tanggal Lahir'],
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd'
                ]
        ]) ?>

    <?= $form->field($model, 'id_agama')->widget(Select2::classname(), [
            'data' =>  Agama::getList(),
            'options' => [
              'placeholder' => '- Pilih Agama -',
            ],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

     <?= $form->field($model, 'id_jk')->widget(Select2::classname(), [
            'data' =>  Jk::getList(),
            'options' => [
              'placeholder' => '- Jenis Kelamin -',
            ],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>


     <?= $form->field($model, 'id_gol_darah')->widget(Select2::classname(), [
            'data' =>  GolDarah::getList(),
            'options' => [
              'placeholder' => '- Golongan Darah -',
            ],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

    <?= $form->field($model, 'id_statuswrg')->widget(Select2::classname(), [
            'data' =>  Statuswrg::getList(),
            'options' => [
              'placeholder' => '- Kewarganegaraan -',
            ],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

    <?= $form->field($model, 'alamat')->textArea(['rows' => 2]) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

   
    <?= $form->field($model, 'nama_kpl')->textInput(['maxlength' => true]) ?>

   <!-- -->
</div>
    <div class="box-footer">
        <div class="col-sm-offset-2 col-sm-3">
             <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
</div>
    <?php ActiveForm::end(); ?>
