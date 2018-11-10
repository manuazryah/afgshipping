<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConsigneeSeacrh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consignee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'consignee_name') ?>

    <?= $form->field($model, 'consignee_id') ?>

    <?= $form->field($model, 'address1') ?>

    <?= $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'address2') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'zipcode') ?>

    <?php // echo $form->field($model, 'customers_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
