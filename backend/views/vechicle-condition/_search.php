<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VechicleConditionSeacrh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vechicle-condition-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'front_windshield') ?>

    <?= $form->field($model, 'bonnet') ?>

    <?= $form->field($model, 'grill') ?>

    <?= $form->field($model, 'front_bumber') ?>

    <?php // echo $form->field($model, 'front_head_light') ?>

    <?php // echo $form->field($model, 'rear_windshield') ?>

    <?php // echo $form->field($model, 'truck_door') ?>

    <?php // echo $form->field($model, 'rear_bumber') ?>

    <?php // echo $form->field($model, 'rear_bumber_support') ?>

    <?php // echo $form->field($model, 'tail_lamp') ?>

    <?php // echo $form->field($model, 'front_left_fender') ?>

    <?php // echo $form->field($model, 'left_front_door') ?>

    <?php // echo $form->field($model, 'left_rear_door') ?>

    <?php // echo $form->field($model, 'left_rear_fender') ?>

    <?php // echo $form->field($model, 'piller') ?>

    <?php // echo $form->field($model, 'roof') ?>

    <?php // echo $form->field($model, 'right_rear_fender') ?>

    <?php // echo $form->field($model, 'right_rear_door') ?>

    <?php // echo $form->field($model, 'right_front_door') ?>

    <?php // echo $form->field($model, 'front_right_fender') ?>

    <?php // echo $form->field($model, 'front_tyers') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'vehicle_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
