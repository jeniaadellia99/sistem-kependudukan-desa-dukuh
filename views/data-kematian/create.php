<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataKematian */

$this->title = 'Tambah Data Kematian';
$this->params['breadcrumbs'][] = ['label' => 'Data Kematian', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-kematian-create box box-primary">

   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
