<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Customers */

$this->title = 'Update Customers: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customers-update">
    <p class="pull-right btn-group">
        <?= Html::a('<i class="fa fa-list"></i>&nbsp;List', ['index', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <?= Html::a('<i class="fa fa-window-close" aria-hidden="true"></i>&nbsp;Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<div class="col-md-1"> </div>
    <div class="col-md-6">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
