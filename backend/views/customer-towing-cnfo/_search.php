<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerTowingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-towing-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'customer_address') ?>

    <?= $form->field($model, 'condition') ?>

    <?= $form->field($model, 'damaged') ?>

    <?= $form->field($model, 'pictures') ?>

    <?php // echo $form->field($model, 'towed') ?>

    <?php // echo $form->field($model, 'keys') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'customers_id') ?>

    <?php // echo $form->field($model, 'vehicle_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
