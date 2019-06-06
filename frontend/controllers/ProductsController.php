<?php

namespace frontend\controllers;

use common\models\CategoriesSearch;
use Yii;
use common\models\Products;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Categories;
use yii\data\Pagination;
use yii\widgets\LinkPager;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
{
    const ITEM_QUANTITY = 3;
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
     * Lists all Products models.
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
            ->andWhere(['=', 'status', '1'])->orderBy(['created_at' => SORT_DESC]);
        $limits = $products->count();
//        if (Yii::$app->request->isAjax){
//            return $this->renderAjax('ajaxIndex',[
//                'products' => $products->limit($quantities)->offset($quantities * ($page - 1))->all(),
//                'page' => $page,
//                'limits' => ['elements' => $limits, 'lastPage' => round($limits / $quantities)]
//            ]);
//        }
//        else {
        return $this->render('index', [
            'pageList' => $this->pageList,
            'products' => $products->limit($quantities)->offset($quantities * ($page - 1))->all(),
            'page' => $page,
            'quantities' => $quantities,
            'limits' => ['elements' => $limits, 'lastPage' => ($limits / $quantities)]
        ]);
//        }
    }

//    public function actionIndex()
//    {
//        $products = Products::find()->where(['is', 'deleted_at', null])
//            ->andWhere(['=', 'status', '1'])->orderBy(['created_at' => SORT_DESC]);
////        $countProducts = clone $products;
//        $totalCount = $products->count();
//        $quantities = $this->pageList[Yii::$app->request->get('quantities') ?? self::ITEM_QUANTITY]
//            ?? self::ITEM_QUANTITY;
//        $pages = new Pagination(['totalCount' => $totalCount, 'pageSize' => $quantities]);
//        $models = $products->offset($pages->offset)
//            ->limit($pages->limit)
//            ->all();
//        return $this->render('index', [
//            'products' => $models,
//            'pages' => $pages,
//            'pageList' => $this->pageList,
//            'quantities' => $quantities
//
//        ]);
//    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $id = Yii::$app->request->get('id');
        $products = Products::find()->where(['id' => $id])->one();
        return $this->render('view', [
            'product' => $products,

        ]);
    }

//    public function actionFindCategoryProducts($category){
//        return $this->render('index', [
//            'products' => Products::find()->where(['is','categor', null])
//                ->andWhere(['=','status','1'])->all()]);
//    }


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
}
