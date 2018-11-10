<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
/* @var $this yii\web\View */
/* @var $model app\models\Vehicle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'make')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'buyer_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'towed_from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lot_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'towed_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'storage_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cheque_no')->textInput() ?>

    <?= $form->field($model, 'add_chgs')->textInput() ?>

    <?= $form->field($model, 'vin')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'created_at')->textInput() ?>

    <?php // $form->field($model, 'updated_at')->textInput() ?>

    <?php //$form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'status_id')->textInput() ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>