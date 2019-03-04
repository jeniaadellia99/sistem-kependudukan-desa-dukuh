<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GolDarah */

$this->title = 'Update Gol Darah: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gol Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gol-darah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
