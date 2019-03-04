<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SuratKetDesa */

$this->title = 'Tambah Surat Ket Desa';
$this->params['breadcrumbs'][] = ['label' => 'Surat Ket Desa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-ket-desa-create">

 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
