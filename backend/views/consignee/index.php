<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsigneeSeacrh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consignees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consignee-index">

   
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Consignee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'consignee_name',
            'consignee_id',
            'address1',
            'city',
            //'country',
            //'phone',
            //'address2',
            //'state',
            //'zipcode',
            //'customers_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
