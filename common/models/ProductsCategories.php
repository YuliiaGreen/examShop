<?php

namespace common\models;

use app\models\Products;
use Yii;

/**
 * This is the model class for table "products_categories".
 *
 * @property int $products_id
 * @property int $categories_id
 *
 * @property Categories $categories
 * @property Products $products
 */
class ProductsCategories extends \yii\db\ActiveRecord
{
    protected static $id;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products_categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['products_id', 'categories_id'], 'required'],
            [['products_id', 'categories_id'], 'integer'],
            [['products_id', 'categories_id'], 'unique', 'targetAttribute' => ['products_id', 'categories_id']],
            [['categories_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['categories_id' => 'id']],
            [['products_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['products_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'products_id' => 'Products ID',
            'categories_id' => 'Categories ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasOne(Categories::className(), ['id' => 'categories_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasOne(Products::className(), ['id' => 'products_id']);
    }

    public function actionView($id)
    {
        $id = Yii::$app->request->get('id');
        $products = Products::find()->where(['id' => $id])->one();
//        print_r( $category);
//        $model = new Categories;
//        $products=ProductsCategories::find()->where(['categories_id'=> $id])->all();
//        print_r( $products);
        return $this->render('view', [
            'products' => $products,
            'model' => $products,
        ]);
    }
}
