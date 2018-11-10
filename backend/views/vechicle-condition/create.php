<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\VechicleCondition */

$this->title = 'Create Vechicle Condition';
$this->params['breadcrumbs'][] = ['label' => 'Vechicle Conditions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vechicle-condition-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
