<?php

use backend\models\Log;
use backend\widgets\Menu;

/* @var $this \yii\web\View */
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <?= Menu::widget([
            'options' => ['class' => 'sidebar-menu'],
            'items' => [
                [
                    'label' => Yii::t('backend', ' Dashboard'),
					
                    'options' => ['class' => 'header'],
                ],
                [
                    'label' => Yii::t('backend', 'Invoice'),
                    'url' => ['#'],
                    'icon' => '<i class="fa fa-line-chart"></i>',
                ],

              
              /*  [
                    'label' => Yii::t('backend', 'Content'),
                    'url' => '#',
                    'icon' => '<i class="fa fa-edit"></i>',
                    'options' => ['class' => 'treeview'],
                    'items' => [
                        ['label' => Yii::t('backend', 'Customers'), 'url' => ['/customers/index'], 'icon' => '<i class="fa fa-angle-double-right"></i>'],
                        ['label' => Yii::t('backend', 'Consignee'), 'url' => ['/consignee/index'], 'icon' => '<i class="fa fa-angle-double-right"></i>'],
                       // ['label' => Yii::t('backend', 'Article categories'), 'url' => ['/article-category/index'], 'icon' => '<i class="fa fa-angle-double-right"></i>'],
                    ],
                ],*/
				 [
                    'label' => Yii::t('backend', 'Core Management'),
                    'options' => ['class' => 'header'],
                ],
				  [
                    'label' => Yii::t('backend', 'Customers'),
                    'url' => ['/customers/index'],
                    'icon' => '<i class="fa fa-user-plus"></i>',
                ],
				                [
                    'label' => Yii::t('backend', 'Consignee'),
                    'url' => ['/consignee/index'],
                    'icon' => '<i class="fa fa-address-card-o"></i>',
                ],
                [
                    'label' => Yii::t('backend', 'Vehicle'),
                    'url' => ['/vehicle/index'],
                    'icon' => '<i class="fa fa-truck"></i>',
                ],
                [
                    'label' => Yii::t('backend', 'Container'),
                    'url' => ['#'],
                    'icon' => '<i class="fa fa-truck"></i>',
                ],
                                [
                    'label' => Yii::t('backend', 'Export'),
                    'url' => ['/export/index'],
                    'icon' => '<i class="glyphicon glyphicon-road
"></i>',
                ],
                                [
                    'label' => Yii::t('backend', 'Container Image'),
                    'url' => ['/container-image/index'],
                    'icon' => '<i class="glyphicon glyphicon-film"></i>',
                ],
                [
                    'label' => Yii::t('backend', 'System'),
                    'options' => ['class' => 'header'],
                ],
                [
                    'label' => Yii::t('backend', 'Users'),
                    'url' => ['/user/index'],
                    'icon' => '<i class="fa fa-users"></i>',
                    'visible' => Yii::$app->user->can('administrator'),
                ],
                [
                    'label' => Yii::t('backend', 'Settings'),
                    'url' => '#',
                    'icon' => '<i class="fa fa-cogs"></i>',
                    'options' => ['class' => 'treeview'],
                    'items' => [
                        ['label' => Yii::t('backend', 'File manager'), 'url' => ['/file-manager/index'], 'icon' => '<i class="fa fa-angle-double-right"></i>'],
                        [
                            'label' => Yii::t('backend', 'DB manager'),
                            'url' => ['/db-manager/default/index'],
                            'icon' => '<i class="fa fa-angle-double-right"></i>',
                            'visible' => Yii::$app->user->can('administrator'),
                        ],

                        //['label' => Yii::t('backend', 'Key storage'), 'url' => ['/key-storage/index'], 'icon' => '<i class="fa fa-angle-double-right"></i>'],
                        ['label' => Yii::t('backend', 'Cache'), 'url' => ['/service/cache'], 'icon' => '<i class="fa fa-angle-double-right"></i>'],
                        ['label' => Yii::t('backend', 'Clear assets'), 'url' => ['/service/clear-assets'], 'icon' => '<i class="fa fa-angle-double-right"></i>'],
                        [
                            'label' => Yii::t('backend', 'Logs'),
                            'url' => ['/log/index'],
                            'icon' => '<i class="fa fa-angle-double-right"></i>',
                            'badge' => Log::find()->count(),
                            'badgeOptions' => ['class' => 'label-danger'],
                        ],
                    ],
                ],
            ],
        ]) ?>
    </section>
</aside>
