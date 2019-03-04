<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SuratTanahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-tanah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'no_persil') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'letak_tanah') ?>

    <?= $form->field($model, 'luas_tanah') ?>

    <?php // echo $form->field($model, 'min_harga_tanah') ?>

    <?php // echo $form->field($model, 'max_harga_tanah') ?>

    <?php // echo $form->field($model, 'luas_bangunan') ?>

    <?php // echo $form->field($model, 'harga_bangunan') ?>

    <?php // echo $form->field($model, 'tanah') ?>

    <?php // echo $form->field($model, 'bangunan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
