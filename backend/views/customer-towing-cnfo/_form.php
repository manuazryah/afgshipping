<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerTowingInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-towing-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'condition')->dropDownList([ 'Non-OP' => 'Non-OP', 'Operable' => 'Operable', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'damaged')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pictures')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'towed')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keys')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'customers_id')->textInput() ?>

    <?= $form->field($model, 'vehicle_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
