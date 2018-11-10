<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vehicle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-form col-sm-12 ">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-sm-5">

        <?=
        $form->field($model, 'year', [
            'inputTemplate' => '<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>{input}</div>',
        ]);
        ?>


        <?=
        $form->field($model, 'make', [
            'inputTemplate' => '<div class="input-group"><span class="input-group-addon"><i class="fa fa-wrench" aria-hidden="true"></i></span>{input}</div>',
        ]);
        ?>

        <?=
        $form->field($model, 'model', [
            'inputTemplate' => '<div class="input-group"><span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>{input}</div>',
        ]);
        ?>

        <?=
        $form->field($model, 'vin', [
            'inputTemplate' => '<div class="input-group"><span class="input-group-addon"><i class="fa fa-id-badge" aria-hidden="true"></i></span>{input}</div>',
        ]);
        ?>


        <?=
        $form->field($model, 'lot_no', [
            'inputTemplate' => '<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-plus-sign	
" aria-hidden="true"></i></span>{input}</div>',
        ]);
        ?>

        <?=
        $form->field($model, 'buyer_no', [
            'inputTemplate' => '<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user	
" aria-hidden="true"></i></span>{input}</div>',
        ]);
        ?>


        <?=
        $form->field($model, 'hat', [
            'inputTemplate' => '<div class="input-group"><span class="input-group-addon">
            <i class="glyphicon glyphicon-globe" aria-hidden="true"></i></span>{input}</div>',
        ]);
        ?>
        <?=
        $form->field($model, 'weight', [
            'inputTemplate' => '<div class="input-group"><span class="input-group-addon">
            <i class="fa fa-balance-scale" aria-hidden="true"></i></span>{input}</div>',
        ]);
        ?>

        <?=
        $form->field($model, 'value', [
            'inputTemplate' => '<div class="input-group"><span class="input-group-addon">
            00.00</span>{input}</div>',
        ]);
        ?>

        <?=
        $form->field($model, 'towed_from', [
            'inputTemplate' => '<div class="input-group"><span class="input-group-addon">
            <i class="fa fa-calculator" aria-hidden="true"></i></span>{input}</div>',
        ]);
        ?>
        <?=
        $form->field($model, 'towed_amount', [
            'inputTemplate' => '<div class="input-group"><span class="input-group-addon">
            <i class="fa fa-calculator	
" aria-hidden="true"></i></span>{input}</div>',
        ]);
        ?>



        <?=
        $form->field($model, 'storage_amount', [
            'inputTemplate' => '<div class="input-group"><span class="input-group-addon">
            <i class="fa fa-calculator" aria-hidden="true"></i></span>{input}</div>',
        ]);
        ?>

    </div>
    <div class="col-sm-5">




        <?=
        $form->field($model, 'cheque_no', [
            'inputTemplate' => '<div class="input-group"><span class="input-group-addon">
            #</span>{input}</div>',
        ]);
        ?>

        <?=
        $form->field($model, 'add_chgs', [
            'inputTemplate' => '<div class="input-group"><span class="input-group-addon">
            00.00</span>{input}</div>',
        ]);
        ?>

        <?= $form->field($check_option_model, 'keys')->textInput() ?>

        <?= $form->field($check_option_model, 'cd_changer')->textInput() ?>
        <?= $form->field($check_option_model, 'gps_navigation_system')->textInput() ?>

        <?= $form->field($check_option_model, 'spare_tire_jack')->textInput() ?>

        <?= $form->field($check_option_model, 'wheel_covers')->textInput() ?>

        <?= $form->field($check_option_model, 'radio')->textInput() ?>
        <?= $form->field($check_option_model, 'cd_player')->textInput() ?>

        <?= $form->field($check_option_model, 'mirror')->textInput() ?>

        <?= $form->field($check_option_model, 'speaker')->textInput() ?>

        <?= $form->field($check_option_model, 'other')->textInput() ?>

    </div>
</div>


<div class="col-sm-12">
    <div class="col-sm-5">
        <?= $form->field($condition_model, 'front_windshield')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'grill')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'front_bumber')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'front_head_light')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'rear_windshield')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'truck_door')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'rear_bumber')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'rear_bumber_support')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'tail_lamp')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'front_left_fender')->textInput(['maxlength' => true]) ?>

 <?= $form->field($attachement_model, 'attachement')->textInput(['maxlength' => true]) ?>

        <?php //$form->field($attachement_model, 'created_at')->textInput() ?>

        <?php //$form->field($attachement_model, 'vehicle_id')->textInput() ?>
    </div>
    <div class="col-sm-5">
        <?= $form->field($condition_model, 'left_front_door')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'left_rear_door')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'left_rear_fender')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'piller')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'roof')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'right_rear_fender')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'right_rear_door')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'right_front_door')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'front_right_fender')->textInput(['maxlength' => true]) ?>

        <?= $form->field($condition_model, 'front_tyers')->textInput(['maxlength' => true]) ?>

        <?php // $form->field($condition_model, 'created_at')->textInput() ?>

        <?php //$form->field($condition_model, 'vehicle_id')->textInput() ?>
       

 <div class="form-group">
    <?= Html::submitButton('Save VehIcle', ['class' => 'btn btn-lg btn-success']) ?>
</div>
    </div>
           
</div>


<?php ActiveForm::end(); ?>

</div>
