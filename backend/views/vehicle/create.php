<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vehicle */

$this->title = 'Create Vehicle';
$this->params['breadcrumbs'][] = ['label' => 'Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-create">
    <p class="pull-right btn-group">
        <?= Html::a('<i class="fa fa-list"></i>&nbsp;List', ['index', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <?=
            $this->render('_form', [
                'model' => $model,
                'condition_model' => $condition_model,
                'attachement_model' => $attachement_model,
                'check_option_model' => $check_option_model,
                
               // 'status' =>$status,
              //  'year' => $year
            ])
            ?>
        </div>
    </div>
</div>