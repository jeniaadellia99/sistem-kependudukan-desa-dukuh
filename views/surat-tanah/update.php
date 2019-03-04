<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SuratTanah */

$this->title = 'Update Surat Tanah: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Tanahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-tanah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
