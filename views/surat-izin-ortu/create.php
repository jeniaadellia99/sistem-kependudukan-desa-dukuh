<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SuratIzinOrtu */

$this->title = 'Tambah Surat Izin Ortu';
$this->params['breadcrumbs'][] = ['label' => 'Surat Izin Ortu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-izin-ortu-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
