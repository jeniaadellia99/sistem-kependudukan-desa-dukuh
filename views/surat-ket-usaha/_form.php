<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use app\models\Jk;
use app\models\Status;

/* @var $this yii\web\View */
/* @var $model app\models\SuratKetUsaha */
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

<div class="surat-ket-usaha-form box box-primary">
    
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

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

     <?= $form->field($model, 'id_status')->widget(Select2::classname(), [
            'data' =>  Status::getList(),
            'options' => [
              'placeholder' => '- Status Perkawinan -',
            ],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>


    <?= $form->field($model, 'alamat')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'tujuan_usaha')->textArea(['maxlength' => true]) ?>


    <div class="box-footer">
        <div class="col-sm-offset-2 col-sm-3">
             <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
</div>
    <?php ActiveForm::end(); ?>
