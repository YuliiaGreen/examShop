<?php

namespace backend\controllers;

use Yii;
use common\models\Categories;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * CategoriesController implements the CRUD actions for Categories model.
 */
class CategoriesController extends Controller
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
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * Lists all Categories models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);

        } else {
            $dataProvider = new ActiveDataProvider([
                'query' => Categories::find(),
            ]);

            return $this->render('index', [
                'dataProvider' => $dataProvider,
            ]);
        }
    }
//    public function actionIndex()
//    {
//        if (Yii::$app->user->isGuest) {
//            return Yii::$app->response->redirect(['site/login']);
//
//        } else {
////            $dataProvider = new ActiveDataProvider([
////                'query' => Categories::find(),
////            ]);
//
//            return $this->render('index', [
//                'dataProvider' => Categories::find()->all(),
//            ]);
//        }
//    }

    /**
     * Displays a single Categories model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if (Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);

        } else {
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
    }
    /**
     * Creates a new Categories model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);

        } else {
            $model = new Categories();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
//                $model->image = UploadedFile::getInstance($model, 'image');
//                if ($model->image) {
//                    $model->upload();
//                }
//                unset($model->image);
//                $model->galery[] = UploadedFile::getInstances($model, 'galery[]');
//                $model->uploadGalery();
                Yii::$app->session->setFlash('success', 'Категорія успішно створнена');
                return $this->redirect(['view', 'id' => $model->id]);
            }

            return $this->render('create', [
                'model' => $model,
                'categories' => Categories::getAllCategoriesAsArray(),
            ]);
        }
    }

    /**
     * Updates an existing Categories model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if (Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);

        } else {
            $model = $this->findModel($id);
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
//                $model->image = UploadedFile::getInstance($model, 'image');
//                if ($model->image) {
//                    $model->upload();
//                }
//                unset($model->image);
//                $model->galery[] = UploadedFile::getInstances($model, 'galery');
//                $model->uploadGalery();
                Yii::$app->session->setFlash('success', 'Дані категорії успішно оновлені');

                return $this->redirect(['view', 'id' => $model->id]);
            }

            return $this->render('update', [
                'model' => $model,
                'categories' => Categories::getAllCategoriesAsArray(),
            ]);
        }
    }

    /**
     * Deletes an existing Categories model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if (Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);

        } else {
            $model = $this->findModel($id);
            $model->delete();

            return $this->redirect(['index']);
        }
    }

    /**
     * Finds the Categories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Categories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function findModel($id)
    {
        if (($model = Categories::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function actionRestore($id)
    {
        $category = Categories::findOne($id);
        if ($category instanceof Products) {
            $category->deleted_at = null;
            $category->status = 1;

            if ($category->save()) {
                return Yii::$app->response->redirect(['category/view', 'id' => $id], 302);
            }
        }
    }


}
