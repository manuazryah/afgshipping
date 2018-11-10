<?php

namespace backend\controllers;

use Yii;
use app\models\Customers;
use app\models\CustomerSeacrh;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CustomersController implements the CRUD actions for Customers model.
 */
class CustomersController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Customers models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new CustomerSeacrh();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Customers model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Customers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Customers();

        if ($model->load(Yii::$app->request->post())) {

            $model->status = 1;
            $model->created_at = date('y-m-d');
            $flag = 0;
            foreach (UploadedFile::getInstances($model, 'upload_documents') as $file) {
                $ext = pathinfo($file->name, PATHINFO_EXTENSION);
                $names = time() . '.' . $ext;
                @$upload_documents .= $names . '-';
                $path = Yii::getAlias('@imgUpload') . '/customers/' . $names;
                if (!$file->saveAs($path)) {
                    $flag = 1;
                }
            }

            $model->upload_documents = @$upload_documents;

            if ($flag == 0 && $model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                echo "Error";
                exit;
                // error in saving model
            }
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Customers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $old_doc = $model->upload_documents;
        if ($model->load(Yii::$app->request->post())) {
            $model->status = 1;
            $model->created_at = date('y-m-d');
            $flag = 0;
            foreach (UploadedFile::getInstances($model, 'upload_documents') as $file) {

                if (!empty($file)) {
                    $ext = pathinfo($file->name, PATHINFO_EXTENSION);
                    $names = time() . '.' . $ext;
                    @$upload_documents .= $names . '-';
                    $path = Yii::getAlias('@imgUpload') . '/customers/' . $names;
                    if (!$file->saveAs($path)) {
                        $flag = 1;
                    }
                    
                    $old_docs = explode("-", $old_doc);
                    $model->upload_documents = @$upload_documents;
                    foreach (array_filter($old_docs) as $doc) {
                        // print_r($doc);exit;
                        $old_path = Yii::getAlias('@imgUpload') . '/customers/' . $doc;
                        if (file_exists($old_path)) {
                            @unlink($old_path);
                        }
                    }
                    }else {
                    $model->upload_documents = $old_doc;
                    }
                 } 
                    if ($flag == 0 && $model->save(false)) {
                        return $this->redirect(['view', 'id' => $model->id]);
                    } else {
                        echo "Error";
                        exit;
                        // error in saving model
                    }
               
            
            return $this->redirect(['view', 'id' => $model->id]);
        
        }
        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Customers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Customers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Customers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Customers::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
