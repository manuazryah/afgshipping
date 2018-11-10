<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\Consignee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consignee-form">
     <div class="col-xs-1">    
    </div>
<div class="col-sm-9">
    <?php $form = ActiveForm::begin(); ?>
    <?=
    // Normal select with ActiveForm & model
    $form->field($model, 'customers_id')->widget(Select2::classname(), [
        'data' => \app\models\Customers::getList(),
        'language' => 'en',
        'options' => ['placeholder' => 'Searcg Customers ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
  <?=
    $form->field($model, 'address1')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'language' => 'en',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);
    ?>
    <?= $form->field($model, 'consignee_name')->textInput(['maxlength' => true]) ?>

    
    <?=
    // Normal select with ActiveForm & model
    $form->field($model, 'consignee_id')->widget(Select2::classname(), [
        'data' => \app\models\Customers::getList(),
        'language' => 'en',
        'options' => ['placeholder' => 'Searcg Consignee ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'address2')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'language' => 'en',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);
    ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zipcode')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>
</div>
</div>
