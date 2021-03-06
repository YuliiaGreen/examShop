<?php

namespace backend\controllers;

use Yii;
use common\models\Products;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use yii\web\UploadedFile;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
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
                    'restore' => ['GET']
                ],
            ],
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);

        } else {
            $dataProvider = new ActiveDataProvider([
                'query' => Products::find(),
            ]);

            return $this->render('index', [
                'dataProvider' => $dataProvider,
            ]);
        }
    }
    /**
     * Displays a single Products model.
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
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);

        } else {
            $model = new Products();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                $model->image = UploadedFile::getInstance($model, 'image');
                if ($model->image) {
                    $model->upload();
                }
                unset($model->image);
//                $model->galery[] = UploadedFile::getInstances($model, 'galery[]');
//                $model->uploadGalery();
                Yii::$app->session->setFlash('success', 'Товар успішно створнений');
                return $this->redirect(['view', 'id' => $model->id]);
            }

            return $this->render('create', [
                'model' => $model,
                'dropdownData' => $model->getAllCategoriesAsArray(),
                'statusList' => $model->getStatusList(),
                'attributesData' => $model->getRelatedAttributesValues(),
            ]);
        }
    }

    /**
     * Updates an existing Products model.
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
                $model->image = UploadedFile::getInstance($model, 'image');
                if ($model->image) {
                    $model->upload();
                }
//                unset($model->image);
//                $model->galery[] = UploadedFile::getInstances($model, 'galery[]');
//                if (!empty($model->galery)) {
//                    $model->uploadGalery();
//                }
                Yii::$app->session->setFlash('success', 'Редаговано');
                return $this->redirect(['view', 'id' => $model->id]);
            }

            return $this->render('update', [
                'model' => $model,
                'dropdownData' => $model->getAllCategoriesAsArray(),
                'statusList' => $model->getStatusList()
            ]);
        }

    }

    /**
     * Deletes an existing Products model.
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
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionRestore($id)
    {
//        dd(123);
        $product = Products::findOne($id);
        if ($product instanceof Products) {
            $product->deleted_at = null;
            $product->status = 1;
//            $product->save();
//            dd($product->save());
            if ($product->save()) {
                Yii::$app->session->setFlash('success', 'Відновлено!');
                return Yii::$app->response->redirect(['products/view', 'id' => $id], 302);
            }
            Yii::$app->session->setFlash('error', 'Щось пішло не так=(');
            return Yii::$app->response->redirect(['products/view', 'id' => $id], 302);
        }
    }

}
