<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rt */

$this->title = 'Tambah RT';
$this->params['breadcrumbs'][] = ['label' => 'RT', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
