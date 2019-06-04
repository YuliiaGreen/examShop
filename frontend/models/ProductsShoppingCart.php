<?php

namespace app\models;

use frontend\models\ShoppingCart;
use common\models\Products;
use Yii;

/**
 * This is the model class for table "products_shopping_cart".
 *
 * @property int $products_id
 * @property int $shopping_cart_id
 * @property int $quantity
 *
 * @property Products $products
 * @property ShoppingCart $shoppingCart
 */
class ProductsShoppingCart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products_shopping_cart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['products_id', 'shopping_cart_id'], 'required'],
            [['products_id', 'shopping_cart_id', 'quantity'], 'integer'],
            [['products_id', 'shopping_cart_id'], 'unique', 'targetAttribute' => ['products_id', 'shopping_cart_id']],
            [['products_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['products_id' => 'id']],
            [['shopping_cart_id'], 'exist', 'skipOnError' => true, 'targetClass' => ShoppingCart::className(), 'targetAttribute' => ['shopping_cart_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'products_id' => 'Products ID',
            'shopping_cart_id' => 'Shopping Cart ID',
            'quantity' => 'Quantity',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasOne(Products::className(), ['id' => 'products_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShoppingCart()
    {
        return $this->hasOne(ShoppingCart::className(), ['id' => 'shopping_cart_id']);
    }
}
