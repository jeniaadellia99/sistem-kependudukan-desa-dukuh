<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SuratIzinOrtuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-izin-ortu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'tempat_lahir') ?>

    <?= $form->field($model, 'tgl_lahir') ?>

    <?= $form->field($model, 'id_jk') ?>

    <?php // echo $form->field($model, 'pekerjaan') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'nama_anak') ?>

    <?php // echo $form->field($model, 'tempat_lahir_anak') ?>

    <?php // echo $form->field($model, 'tgl_lahir_anak') ?>

    <?php // echo $form->field($model, 'id_jk_anak') ?>

    <?php // echo $form->field($model, 'bekerja_di') ?>

    <?php // echo $form->field($model, 'sebagai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
