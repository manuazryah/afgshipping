<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ContainerImage */

$this->title = 'Create Container Image';
$this->params['breadcrumbs'][] = ['label' => 'Container Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-image-create">

   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
