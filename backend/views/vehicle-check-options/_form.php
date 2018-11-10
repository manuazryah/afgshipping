<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VehiceCheckOptions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehice-check-options-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'keys')->textInput() ?>

    <?= $form->field($model, 'cd_changer')->textInput() ?>

    <?= $form->field($model, 'gps_navigation_system')->textInput() ?>

    <?= $form->field($model, 'spare_tire_jack')->textInput() ?>

    <?= $form->field($model, 'wheel_covers')->textInput() ?>

    <?= $form->field($model, 'radio')->textInput() ?>

    <?= $form->field($model, 'cd_player')->textInput() ?>

    <?= $form->field($model, 'mirror')->textInput() ?>

    <?= $form->field($model, 'speaker')->textInput() ?>

    <?= $form->field($model, 'other')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'vehicle_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
