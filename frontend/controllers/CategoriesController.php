<?php

namespace frontend\controllers;

use Yii;
use common\models\Categories;
use common\models\CategoriesSearch;
use common\models\ProductsCategories;
use common\models\Products;
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
        $products = \common\models\Categories::find()->all();

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
        $page = Yii::$app->request->get('page') ?? 1;
        $quantities = $this->pageList[Yii::$app->request->get('quantities') ?? self::ITEM_QUANTITY]
            ?? self::ITEM_QUANTITY;
        if ($page < 1 && !is_numeric($page)) {
            $page = 1;
        }
        $id = Yii::$app->request->get('id');
        $category = Categories::find()->where(['id' => $id])->one();
        $children = Categories::find()->where(['parent_id' => $id])->all();
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
            'children' => $children,
            'product' => $category,
            'categories' => CategoriesSearch::getParentCategories(),

        ]);
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
