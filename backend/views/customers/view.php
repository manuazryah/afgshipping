<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Customers */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="customers-view">

   
    <p class="pull-right btn-group">
        <?= Html::a('<i class="fa fa-list"></i>&nbsp;List', ['index'], ['class' => 'btn btn-primary']) ?>
		 <?= Html::a('<i class="fa fa-edit"></i>&nbsp;Update', ['update', 'id' => $model->id], ['class' => 'btn btn-info']) ?>

        <?= Html::a('<i class="fa fa-window-close" aria-hidden="true"></i>&nbsp;Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'email:email',
            'phone_usa',
            'trn_usq',
            'address1:ntext',
            'country',
            'state',
            'other_emails:ntext',
            'upload_documents',
            'company_name',
            'phone_uae',
            'trn_uae',
            'address2:ntext',
            'city',
            'zipcode',
            'notes:ntext',
            'created_at',
            'status',
        ],
    ]) ?>

</div>
