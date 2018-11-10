<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerTowingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Towing Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-towing-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer Towing Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'customer_address',
            'condition',
            'damaged',
            'pictures',
            //'towed',
            //'keys',
            //'created_at',
            //'customers_id',
            //'vehicle_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
