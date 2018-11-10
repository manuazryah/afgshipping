<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Export */

$this->title = Yii::t('app', 'Create Export');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Exports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="export-create">

    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
