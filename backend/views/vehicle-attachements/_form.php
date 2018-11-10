<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VehicleAttachements */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-attachements-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'attachement')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'vehicle_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
