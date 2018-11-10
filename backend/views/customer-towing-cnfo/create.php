<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CustomerTowingInfo */

$this->title = 'Create Customer Towing Info';
$this->params['breadcrumbs'][] = ['label' => 'Customer Towing Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-towing-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
