<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\VehicleAttachements */

$this->title = 'Create Vehicle Attachements';
$this->params['breadcrumbs'][] = ['label' => 'Vehicle Attachements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-attachements-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
