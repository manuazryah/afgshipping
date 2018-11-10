<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VehiceCheckOptionsSeacrh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehice-check-options-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'keys') ?>

    <?= $form->field($model, 'cd_changer') ?>

    <?= $form->field($model, 'gps_navigation_system') ?>

    <?= $form->field($model, 'spare_tire_jack') ?>

    <?php // echo $form->field($model, 'wheel_covers') ?>

    <?php // echo $form->field($model, 'radio') ?>

    <?php // echo $form->field($model, 'cd_player') ?>

    <?php // echo $form->field($model, 'mirror') ?>

    <?php // echo $form->field($model, 'speaker') ?>

    <?php // echo $form->field($model, 'other') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'vehicle_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
