<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SuratTanah */

$this->title = 'Tambah Surat Tanah';
$this->params['breadcrumbs'][] = ['label' => 'Surat Tanah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-tanah-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
