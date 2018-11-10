<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Export */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="export-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'cust_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'export_date')->textInput() ?>

    <?= $form->field($model, 'loding_date')->textInput() ?>

    <?= $form->field($model, 'broker_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'booking_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ETA')->textInput() ?>

    <?= $form->field($model, 'ar_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'xtn_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seal_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'container_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cut_off')->textInput() ?>

    <?= $form->field($model, 'vessel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'voyage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'terminal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stremship_line')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'destination')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'special_instruction')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'port_of_loading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'port_of_discharge')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bol_note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bl_or_awb_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'export_referance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'forwading_agent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'domestic_routing_instructions')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pre_carraiage_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place_of_recipt_by_pre_carrrier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'final_destintion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loading_terminal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'container_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_of_packages')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exporting_carruer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'auto_recieving_date')->textInput() ?>

    <?= $form->field($model, 'auto_cut_off')->textInput() ?>

    <?= $form->field($model, 'vessel_cut_off')->textInput() ?>

    <?= $form->field($model, 'sale_date')->textInput() ?>

    <?= $form->field($model, 'vehicle_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exporter_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exporter_type_issue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transpotation_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exporter_dob')->textInput() ?>

    <?= $form->field($model, 'ultimate_consignee_dob')->textInput() ?>

    <?= $form->field($model, 'conignee_id')->textInput() ?>

    <?= $form->field($model, 'notify_party')->textInput() ?>

    <?= $form->field($model, 'menifest_consignee')->textInput() ?>

    <?= $form->field($model, 'invoice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'status_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
