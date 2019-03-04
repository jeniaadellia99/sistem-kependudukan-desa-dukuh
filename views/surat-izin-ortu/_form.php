<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use app\models\Jk;

/* @var $this yii\web\View */
/* @var $model app\models\SuratIzinOrtu */
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
<div class="surat-izin-ortu-form box box-primary">

   <div class="box-header">
        <h3 class="box-title">Form Surat Izin Orang Tua</h3>       
    </div>
        <div class="box-body">

 <?= $form->errorSummary($model); ?>

  <h3 class="box-title">Data Orang Tua</h3>    

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'id_jk')->widget(Select2::classname(), [
            'data' =>  Jk::getList(),
            'options' => [
              'placeholder' => '- Jenis Kelamin -',
            ],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textArea(['maxlength' => true]) ?>

     <h3 class="box-title">Data Anak</h3>    

    <?= $form->field($model, 'nama_anak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir_anak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir_anak')->widget(DatePicker::className(), [
                'removeButton' => false,
                'value' => date('Y-m-d'),
                'options' => ['placeholder' => 'Tanggal Lahir'],
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd'
                ]
        ]) ?>

   <?= $form->field($model, 'id_jk_anak')->widget(Select2::classname(), [
            'data' =>  Jk::getList(),
            'options' => [
              'placeholder' => '- Jenis Kelamin -',
            ],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

    <?= $form->field($model, 'bekerja_di')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'sebagai')->textInput(['maxlength' => true]) ?>

    <!--  -->
     </div>
    <div class="box-footer">
        <div class="col-sm-offset-2 col-sm-3">
             <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
</div>
    <?php ActiveForm::end(); ?>
