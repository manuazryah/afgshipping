<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Export */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Exports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="export-view">

   
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'customer',
            'customer_id',
            'cust_address:ntext',
            'export_date',
            'loding_date',
            'broker_name',
            'booking_no',
            'ETA',
            'ar_no',
            'xtn_no',
            'seal_no',
            'container_no',
            'cut_off',
            'vessel',
            'voyage',
            'terminal',
            'stremship_line',
            'destination',
            'ITN',
            'contact_details:ntext',
            'special_instruction:ntext',
            'port_of_loading',
            'port_of_discharge',
            'bol_note',
            'bl_or_awb_number',
            'export_referance',
            'forwading_agent:ntext',
            'domestic_routing_instructions:ntext',
            'pre_carraiage_by',
            'place_of_recipt_by_pre_carrrier',
            'final_destintion',
            'loading_terminal',
            'container_type',
            'number_of_packages',
            'by',
            'exporting_carruer',
            'date',
            'auto_recieving_date',
            'auto_cut_off',
            'vessel_cut_off',
            'sale_date',
            'vehicle_location',
            'exporter_id',
            'exporter_type_issue',
            'transpotation_value',
            'exporter_dob',
            'ultimate_consignee_dob',
            'conignee_id',
            'notify_party',
            'menifest_consignee',
            'invoice',
            'created_at',
            'updated_at',
            'updated_by',
            'status_id',
        ],
    ]) ?>

</div>
