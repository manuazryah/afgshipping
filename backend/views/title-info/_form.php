<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TitleInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="title-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_received')->textInput() ?>

    <?= $form->field($model, 'title_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'towing_request_date')->textInput() ?>

    <?= $form->field($model, 'deliver_date')->textInput() ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'vehicle_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
