<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\exportsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Exports');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="export-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Export'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'customer',
            'customer_id',
            'cust_address:ntext',
            'export_date',
            //'loding_date',
            //'broker_name',
            //'booking_no',
            //'ETA',
            //'ar_no',
            //'xtn_no',
            //'seal_no',
            //'container_no',
            //'cut_off',
            //'vessel',
            //'voyage',
            //'terminal',
            //'stremship_line',
            //'destination',
            //'ITN',
            //'contact_details:ntext',
            //'special_instruction:ntext',
            //'port_of_loading',
            //'port_of_discharge',
            //'bol_note',
            //'bl_or_awb_number',
            //'export_referance',
            //'forwading_agent:ntext',
            //'domestic_routing_instructions:ntext',
            //'pre_carraiage_by',
            //'place_of_recipt_by_pre_carrrier',
            //'final_destintion',
            //'loading_terminal',
            //'container_type',
            //'number_of_packages',
            //'by',
            //'exporting_carruer',
            //'date',
            //'auto_recieving_date',
            //'auto_cut_off',
            //'vessel_cut_off',
            //'sale_date',
            //'vehicle_location',
            //'exporter_id',
            //'exporter_type_issue',
            //'transpotation_value',
            //'exporter_dob',
            //'ultimate_consignee_dob',
            //'conignee_id',
            //'notify_party',
            //'menifest_consignee',
            //'invoice',
            //'created_at',
            //'updated_at',
            //'updated_by',
            //'status_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
