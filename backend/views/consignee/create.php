<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Consignee */

$this->title = 'Create Consignee';
$this->params['breadcrumbs'][] = ['label' => 'Consignees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consignee-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
