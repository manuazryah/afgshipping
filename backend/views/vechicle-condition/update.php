<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VechicleCondition */

$this->title = 'Update Vechicle Condition: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vechicle Conditions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vechicle-condition-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
