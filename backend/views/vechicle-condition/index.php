<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\VechicleConditionSeacrh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vechicle Conditions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vechicle-condition-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vechicle Condition', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'front_windshield',
            'bonnet',
            'grill',
            'front_bumber',
            //'front_head_light',
            //'rear_windshield',
            //'truck_door',
            //'rear_bumber',
            //'rear_bumber_support',
            //'tail_lamp',
            //'front_left_fender',
            //'left_front_door',
            //'left_rear_door',
            //'left_rear_fender',
            //'piller',
            //'roof',
            //'right_rear_fender',
            //'right_rear_door',
            //'right_front_door',
            //'front_right_fender',
            //'front_tyers',
            //'created_at',
            //'vehicle_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
