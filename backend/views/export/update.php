<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Export */

$this->title = Yii::t('app', 'Update Export: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Exports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="export-update">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
