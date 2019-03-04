<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Statuswrg */

$this->title = 'Tambah Kewarganegaraan';
$this->params['breadcrumbs'][] = ['label' => 'Statuswrgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statuswrg-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
