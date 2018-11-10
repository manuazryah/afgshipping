<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\VehiceCheckOptionsSeacrh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehice Check Options';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehice-check-options-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vehice Check Options', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'keys',
            'cd_changer',
            'gps_navigation_system',
            'spare_tire_jack',
            //'wheel_covers',
            //'radio',
            //'cd_player',
            //'mirror',
            //'speaker',
            //'other',
            //'created_at',
            //'vehicle_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
