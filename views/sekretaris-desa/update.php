<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SekretarisDesa */

$this->title = 'Update Sekretaris Desa: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sekretaris Desas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sekretaris-desa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
