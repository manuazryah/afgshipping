<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Customers */

$this->title = 'Create Customers';
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="customers-create  ">
    <p class="pull-right btn-group">
        <?= Html::a('<i class="fa fa-list"></i>&nbsp;List', ['index', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
<div class="col-md-1"> 
 
</div>
    <div class="col-md-12">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
