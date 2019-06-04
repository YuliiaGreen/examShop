<?php

namespace frontend\models;

use app\models\ProductsShoppingCart;
use common\models\Products;
use Yii;
use common\models\User;

/**
 * This is the model class for table "{{%shopping_cart}}".
 *
 * @property int $id
 * @property string $status
 * @property int $user_id
 * @property array $data
 * @property int $created_at
 * @property int $updated_at
 * @property int $deleted_at
 *
 * @property ProductsShoppingCart[] $productsShoppingCarts
 * @property Products[] $products
 * @property User $user
 */
class ShoppingCart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%shopping_cart}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'string'],
            [['user_id', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['data'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'user_id' => 'User ID',
            'data' => 'Data',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductsShoppingCarts()
    {
        return $this->hasMany(ProductsShoppingCart::className(), ['shopping_cart_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['id' => 'products_id'])->viaTable('{{%products_shopping_cart}}',
            ['shopping_cart_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

//    public function addProductToCart($product)
//    {
//        $flag = true;
//        foreach ($this->getProducts()->all() as $productItem) {
//            if ($productItem->id === $product->id) {
//                $flag = false;
//            }
//        }
//        if ($flag) {
//                $this->link('products', $product);
//            return true;
//        }
//        else {
//            return false;
//        }
//    }

    public function addProductToCart($product)
    {
        $junction = ProductsShoppingCart::find()->where(['products_id' => $product->id])
            ->andWhere(['shopping_cart_id' => $this->id])->one();
//            if (isset($junction)&& !$junction->isNewRecord){
        if (isset($junction)) {
            $junction->quantity++;
        } else {
            $junction = new ProductsShoppingCart();
            $junction->setAttributes(['products_id' => $product->id, 'shopping_cart_id' => $this->id, 'quantity' => 1]);
        }
        $junction->save();
        return true;
    }

    public static function findLastCart()
    {
        $cart = ShoppingCart::find()->where(['is', 'deleted_at', NULL])->
        andWhere(['=', 'user_id', Yii::$app->user->identity->getId()])
            ->andWhere(['=', 'status', 'created'])->one();
        if ($cart === null) {
            return new static();
        } else {
            return $cart;
        }
    }

}
