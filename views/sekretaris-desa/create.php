<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SekretarisDesa */

$this->title = 'Tambah Sekretaris Desa';
$this->params['breadcrumbs'][] = ['label' => 'Sekretaris Desas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sekretaris-desa-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
