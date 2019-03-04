<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\number\NumberControl;
/* @var $this yii\web\View */
/* @var $model app\models\SuratTanah */
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
<div class="surat-tanah-form box box-primary">
      <div class="box-header">
        <h3 class="box-title">Form Surat Tanah</h3>       
    </div>
        <div class="box-body">

 <?= $form->errorSummary($model); ?>
    <?= $form->field($model, 'no_persil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'letak_tanah')->textArea(['rows' => 2]) ?>

    <?= $form->field($model, 'luas_tanah')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'min_harga_tanah')->widget(NumberControl::className(), [
        'name' => 'integer-only',
        'maskedInputOptions' => ['digits' => 0],
    ]); ?>

     <?= $form->field($model, 'max_harga_tanah')->widget(NumberControl::className(), [
        'name' => 'integer-only',
        'maskedInputOptions' => ['digits' => 0],
    ]); ?>

    <?= $form->field($model, 'luas_bangunan')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'harga_bangunan')->widget(NumberControl::className(), [
        'name' => 'integer-only',
        'maskedInputOptions' => ['digits' => 0],
    ]); ?>

    <?= $form->field($model,'tanah')->widget(NumberControl::className(), [
        'name' => 'integer-only',
        'maskedInputOptions' => ['digits' => 0],
    ]); ?>

    <?= $form->field($model, 'bangunan')->widget(NumberControl::className(), [
        'name' => 'integer-only',
        'maskedInputOptions' => ['digits' => 0],
    ]); ?>
  <h3 class="box-title">Batas Tanah atau Bangunan</h3>     
    <?= $form->field($model, 'bts_sebelah_selatan')->textArea(['rows' => 2]) ?>
    <?= $form->field($model, 'bts_sebelah_utara')->textArea(['rows' => 2]) ?>
    <?= $form->field($model, 'bts_sebelah_timur')->textArea(['rows' => 2]) ?>
    <?= $form->field($model, 'bts_sebelah_barat')->textArea(['rows' => 2]) ?>


<!--  -->
  </div>
    <div class="box-footer">
        <div class="col-sm-offset-2 col-sm-3">
             <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
</div>
    <?php ActiveForm::end(); ?>
