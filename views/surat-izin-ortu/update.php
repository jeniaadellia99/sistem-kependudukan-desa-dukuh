<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SuratIzinOrtu */

$this->title = 'Update Surat Izin Ortu: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Izin Ortus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-izin-ortu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
