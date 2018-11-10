<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TitleInfo */

$this->title = 'Create Title Info';
$this->params['breadcrumbs'][] = ['label' => 'Title Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="title-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
