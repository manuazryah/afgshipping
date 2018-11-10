<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VehiceCheckOptions */

$this->title = 'Update Vehice Check Options: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vehice Check Options', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vehice-check-options-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
