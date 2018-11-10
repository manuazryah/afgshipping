<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TitleInfoSeacrh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="title-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'title_type') ?>

    <?= $form->field($model, 'title_received') ?>

    <?= $form->field($model, 'title_no') ?>

    <?php // echo $form->field($model, 'title_state') ?>

    <?php // echo $form->field($model, 'towing_request_date') ?>

    <?php // echo $form->field($model, 'deliver_date') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'vehicle_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
