<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\VehiceCheckOptions */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vehice Check Options', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="vehice-check-options-view">

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
            'keys',
            'cd_changer',
            'gps_navigation_system',
            'spare_tire_jack',
            'wheel_covers',
            'radio',
            'cd_player',
            'mirror',
            'speaker',
            'other',
            'created_at',
            'vehicle_id',
        ],
    ]) ?>

</div>
