<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\VehicleSeacrh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehicles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-index">
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p class="pull-right">
        <?= Html::a('<i class="fa fa-plus"></i>&nbsp;Create Vehicle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'model',
            'make',
            'hat',
            'weight',
            //'value',
            //'buyer_no',
            //'towed_from',
            //'lot_no',
            //'towed_amount',
            //'storage_amount',
            //'cheque_no',
            //'add_chgs',
            //'vin',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'status_id',
            //'year',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
