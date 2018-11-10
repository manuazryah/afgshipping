<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContainerImage */

$this->title = 'Update Container Image: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Container Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container-image-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
