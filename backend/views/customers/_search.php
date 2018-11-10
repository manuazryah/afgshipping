<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerSeacrh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'phone_usa') ?>

    <?= $form->field($model, 'trn_usq') ?>

    <?php // echo $form->field($model, 'address1') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'other_emails') ?>

    <?php // echo $form->field($model, 'upload_documents') ?>

    <?php // echo $form->field($model, 'company_name') ?>

    <?php // echo $form->field($model, 'phone_uae') ?>

    <?php // echo $form->field($model, 'trn_uae') ?>

    <?php // echo $form->field($model, 'address2') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'zipcode') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
