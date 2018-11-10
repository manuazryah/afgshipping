<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TitleInfoSeacrh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Title Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="title-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Title Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'title_type',
            'title_received',
            'title_no',
            //'title_state',
            //'towing_request_date',
            //'deliver_date',
            //'note:ntext',
            //'created_at',
            //'vehicle_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
