<?php

namespace backend\controllers;

use Yii;
use common\models\ClientsLogos;
use common\models\ClientsCategories;
use common\models\search\ClientsLogosSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;

/**
 * LogosController implements the CRUD actions for ClientsLogos model.
 */
class LogosController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    // 'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ClientsLogos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClientsLogosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $categories = ClientsCategories::find()
          ->select(['id', 'name'])
          ->asArray()
          ->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'categories' => ArrayHelper::map($categories, 'id', 'name'),
        ]);
    }

    /**
     * Displays a single ClientsLogos model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ClientsLogos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ClientsLogos();

        if ($model->load(Yii::$app->request->post())) {

          $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
          if ($model->imageFile && $model->upload()) {
              $model->imageFile = null;
          }

          if ($model->save())
            return $this->redirect(['view', 'id' => $model->id]);
          else {
            foreach ($model->errors as $error) {
              Yii::$app->session->setFlash('error', $error);
            }
          }
        }

        $categories = ClientsCategories::find()
          ->select(['id', 'name'])
          ->asArray()
          ->all();

        return $this->render('create', [
            'model' => $model,
            'categories' => ArrayHelper::map($categories, 'id', 'name'),
        ]);
    }

    /**
     * Updates an existing ClientsLogos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

          $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
          if ($model->imageFile && $model->upload()) {
              $model->imageFile = null;
          }

          if ($model->save())
            return $this->redirect(['view', 'id' => $model->id]);
          else {
            foreach ($model->errors as $error) {
              Yii::$app->session->setFlash('error', $error);
            }
          }
        }

        $categories = ClientsCategories::find()
          ->select(['id', 'name'])
          ->asArray()
          ->all();

        return $this->render('update', [
            'model' => $model,
            'categories' => ArrayHelper::map($categories, 'id', 'name'),
        ]);
    }

    /**
     * Deletes an existing ClientsLogos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        $url = Yii::getAlias('@frontend') . '/web/images/clients/';
        // $url = str_replace('backend', 'frontend', $url);

        if (unlink($url . $model->file) && $model->delete()) {
          return $this->redirect(['index']);
        } else {
          Yii::$app->session->setFlash('error', 'Error eliminando el logo.');
        }

        return $this->redirect(['index']);
    }

    /**
     * Changes Status.
     *
     * @return string
     */
    public function actionStatus()
    {
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();

            $model = ClientsLogos::findOne($data['id']);

            if ($model->status)
                $model->status = ClientsLogos::STATUS_DELETED;
            else
                $model->status = ClientsLogos::STATUS_ACTIVE;

            $model->save();
        }

        return null;
    }

    /**
     * Finds the ClientsLogos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ClientsLogos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ClientsLogos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
