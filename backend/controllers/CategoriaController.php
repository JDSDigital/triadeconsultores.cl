<?php

namespace backend\controllers;

use Yii;
use common\models\ClientsCategories;
use common\models\search\ClientsCategoriesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoriaController implements the CRUD actions for ClientsCategories model.
 */
class CategoriaController extends Controller
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
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ClientsCategories models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClientsCategoriesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ClientsCategories model.
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
     * Creates a new ClientsCategories model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ClientsCategories();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save())
              return $this->redirect(['view', 'id' => $model->id]);
            else {
              foreach ($model->errors as $error) {
                Yii::$app->session->setFlash('error', $error);
              }
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ClientsCategories model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
          if ($model->save())
            return $this->redirect(['view', 'id' => $model->id]);
          else {
            foreach ($model->errors as $error) {
              Yii::$app->session->setFlash('error', $error);
            }
          }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ClientsCategories model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $url = Yii::getAlias('@frontend') . '/web/images/clients/';

        foreach ($model->clientsLogos as $logo) {

          if (unlink($url . $logo->file) && $logo->delete())
            continue;

        }

        if (!$model->delete())
          Yii::$app->session->setFlash('error', 'Error eliminando la categoría.');

        return $this->redirect(['index']);
        
    }

    /**
     * Changes CategoriesStatus.
     *
     * @return string
     */
    public function actionStatus()
    {
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();

            $model = ClientsCategories::findOne($data['id']);

            if ($model->status)
                $model->status = ClientsCategories::STATUS_DELETED;
            else
                $model->status = ClientsCategories::STATUS_ACTIVE;

            $model->save();
        }

        return null;
    }

    /**
     * Finds the ClientsCategories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ClientsCategories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ClientsCategories::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
