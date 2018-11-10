<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\VechicleCondition */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vechicle Conditions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="vechicle-condition-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'front_windshield',
            'bonnet',
            'grill',
            'front_bumber',
            'front_head_light',
            'rear_windshield',
            'truck_door',
            'rear_bumber',
            'rear_bumber_support',
            'tail_lamp',
            'front_left_fender',
            'left_front_door',
            'left_rear_door',
            'left_rear_fender',
            'piller',
            'roof',
            'right_rear_fender',
            'right_rear_door',
            'right_front_door',
            'front_right_fender',
            'front_tyers',
            'created_at',
            'vehicle_id',
        ],
    ]) ?>

</div>
