<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataLahir */

$this->title = 'Update Data Lahir: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Data Lahirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-lahir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
