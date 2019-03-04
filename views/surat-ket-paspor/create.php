<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SuratKetPaspor */

$this->title = 'Tambah Surat Ket Paspor';
$this->params['breadcrumbs'][] = ['label' => 'Surat Ket Paspor', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-ket-paspor-create box box-primary">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
