<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GolDarah */

$this->title = 'Tambah Gol Darah';
$this->params['breadcrumbs'][] = ['label' => 'Gol Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gol-darah-create">

  

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
