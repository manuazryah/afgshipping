<?php
use yii\bootstrap\Tabs;



echo Tabs::widget([
        'items' => [
		            [
                'label' => 'Vehicle Comman',
                'content' => $this->render('_comman', ['model' => $model, 'form' => $form]),
            ],
            [
                'label' => 'Update the check options',
                'content' => $this->render('_check_options', ['model' => $check_options, 'form' => $form]),
                'active' => true
            ],
			            [
                'label' => 'Add attchements',
                'content' => $this->render('_attachement', ['model' => $vehicle_attachments, 'form' => $form]),
            ],
			            [
                'label' => 'Update with conditions',
                'content' => $this->render('_conditions', ['model' => $conditions, 'form' => $form]),
            ]
        ]]);
		
		
	

 ?>
 
 