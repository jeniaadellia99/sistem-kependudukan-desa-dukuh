<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataPenduduk */

$this->title = 'Edit Data Penduduk: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Data Penduduk', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="data-penduduk-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
