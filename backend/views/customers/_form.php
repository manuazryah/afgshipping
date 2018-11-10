
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Customers */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="customers-form">
     <div class="col-xs-1">    
    </div>
<div class="col-sm-9">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_usa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trn_usq')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_emails')->textarea(['rows' => 6]) ?>

    <?php if (Yii::$app->controller->action->id == 'update') { ?>
        <!--           <img src="<?php echo \Yii::getAlias('@web') . '/img/customers/avatars/' . $model->upload_documents ?>">        -->
    <?php } ?>
    
    <div class="well">
        <?php
        echo $form->field($model, 'upload_documents[]')->widget(FileInput::classname(), [
            'options' => ['multiple' => 'true'],
            'pluginOptions' => [
                'showCaption' => false,
                'showPreview' => false,
                'initialPreviewConfig' => false,
            #'uploadUrl' => Url::to(['/upload/single']),
            ],
        ]);
        ?>

    </div>
</div>
    <div class="col-sm-6">
    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_uae')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trn_uae')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zipcode')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'notes')->widget(TinyMce::className(), [
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
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-lg']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>