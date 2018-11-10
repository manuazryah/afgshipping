<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VechicleCondition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vechicle-condition-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'front_windshield')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bonnet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grill')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'front_bumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'front_head_light')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rear_windshield')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'truck_door')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rear_bumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rear_bumber_support')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tail_lamp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'front_left_fender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'left_front_door')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'left_rear_door')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'left_rear_fender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'piller')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roof')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'right_rear_fender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'right_rear_door')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'right_front_door')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'front_right_fender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'front_tyers')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'vehicle_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
