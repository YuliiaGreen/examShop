<?php

namespace frontend\controllers;

use Yii;
use common\models\Categories;
use common\models\CategoriesSearch;
use common\models\ProductsCategories;
use app\models\Products;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoriesController implements the CRUD actions for Categories model.
 */
class CategoriesController extends Controller
{
    const ITEM_QUANTITY = 9;
    protected $pageList = [
        '3' => '3',
        '9' => '9',
        '12' => '12'];

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
     * Lists all Categories models.
     * @return mixed
     */
    public function actionIndex()
    {
        $page = Yii::$app->request->get('page') ?? 1;
        $quantities = $this->pageList[Yii::$app->request->get('quantities') ?? self::ITEM_QUANTITY]
            ?? self::ITEM_QUANTITY;
        if ($page < 1 && !is_numeric($page)) {
            $page = 1;
        }
        $products = Products::find()->where(['is', 'deleted_at', null])
            ->andWhere(['=', 'status', '1'])->orderBy(['created_at' => SORT_DESC])->all();

        return $this->render('index', [
            'categories' => CategoriesSearch::getParentCategories(),
            'products' => $products,
        ]);
    }

    /**
     * Displays a single Categories model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $id = Yii::$app->request->get('id');
        $category = Categories::find()->with('products')->where(['id' => $id])->one();
//        print_r( $category);
//        $model = new Categories;
//        $products = $category->products;
//        print_r( $products);
//        dd($products);
//        $temp=[];
//        $productsCategories = ProductsCategories::find()->where(['=', 'categories_id', $id])->all();
//            foreach($productsCategories as $productCategory){
//                $temp[]=Products::find()->where(['=','id',$productCategory->products_id])->one();
//            }
//            dd($temp);
        return $this->render('view', [
//            'products' => $products,
            'model' => $category,
            'categories' => CategoriesSearch::getParentCategories(),

        ]);
    }

    /**
     * Creates a new Categories model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Categories();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
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
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
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
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Categories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Categories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Categories::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


}
