<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SuratWali */

$this->title = 'Tambah Surat Wali';
$this->params['breadcrumbs'][] = ['label' => 'Surat Walis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-wali-create">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
