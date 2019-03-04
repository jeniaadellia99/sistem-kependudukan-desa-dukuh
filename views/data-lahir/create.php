<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataLahir */

$this->title = 'Tambah Data Lahir';
$this->params['breadcrumbs'][] = ['label' => 'Data Lahir', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-lahir-create">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
