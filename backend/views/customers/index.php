<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerSeacrh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-index">

    
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p class="pull-right">
        <?= Html::a('<i class="fa fa-plus"></i>&nbsp;Create Customers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'name',
            'email:email',
            'phone_usa',
            'trn_usq',
            'address1:ntext',
            'country',
            //'state',
            //'other_emails:ntext',
            //'upload_documents',
            //'company_name',
            //'phone_uae',
            //'trn_uae',
            //'address2:ntext',
            //'city',
            //'zipcode',
            //'notes:ntext',
            //'created_at',
            //'status',

           [
    'class' => 'yii\grid\ActionColumn',
    'template' => '{view}{update}{delete}',
                'contentOptions' => ['style' => 'width:125px; white-space: normal;'],

    'buttons' => ['view' => function($url, $model) {
	    return Html::a('<span class="btn btn-sm btn-default"><b class="fa fa-search-plus"></b></span>', ['view', 'id' => $model['id']], ['title' => 'View', 'id' => 'modal-btn-view']);
	},
	'update' => function($id, $model) {
	    return Html::a('<span class="btn btn-sm btn-default"><b class="fa fa-edit"></b></span>', ['update', 'id' => $model['id']], ['title' => 'Update', 'id' => 'modal-btn-view']);
	},
	'delete' => function($url, $model) {
	    return Html::a('<span class="btn btn-sm btn-danger"><b class="fa fa-trash"></b></span>', ['delete', 'id' => $model['id']], ['title' => 'Delete', 'class' => '', 'data' => ['confirm' => 'Are you absolutely sure ? You will lose all the information about this user with this action.', 'method' => 'post', 'data-pjax' => false],]);
	}
    ]
],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
