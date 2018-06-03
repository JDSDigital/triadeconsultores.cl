<?php

namespace frontend\controllers;

use common\models\Categories;
use common\models\Images;

class GaleriaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $categories = Categories::find()->where(['status' => Categories::STATUS_ACTIVE])->all();

        return $this->render('index', [
          'categories' => $categories,
        ]);
    }

    public function actionCategoria($id)
    {
      $category = Categories::findOne($id);
      $images = Images::find()
        ->where(['status' => Images::STATUS_ACTIVE])
        ->andWhere(['category_id' => $id])
        ->all();

      return $this->render('categoria', [
        'category' => $category,
        'images' => $images,
      ]);
    }
}
