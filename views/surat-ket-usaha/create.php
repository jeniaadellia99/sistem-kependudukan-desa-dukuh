<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SuratKetUsaha */

$this->title = 'Form Surat Ket Usaha';
$this->params['breadcrumbs'][] = ['label' => 'Surat Ket Usaha', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-ket-usaha-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
