<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerTowingInfo */

$this->title = 'Update Customer Towing Info: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Towing Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customer-towing-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
