<?php

namespace common\models;

use Yii;
use frontend\models\ShoppingCart;
use yii\helpers\ArrayHelper;
use app\models\Attributes;
use app\models\AttributesValues;
use app\models\ProductsMapping;
use app\models\ProductsShoppingCart;
/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property int $price
 * @property int $image_id
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $deleted_at
 * @property int $seo
 *
 * @property ProductsCategories[] $productsCategories
 * @property Categories[] $categories
 * @property ProductsMapping[] $productsMappings
 * @property ProductsShoppingCart[] $productsShoppingCarts
 * @property ShoppingCart[] $shoppingCarts
 */
class Products extends \yii\db\ActiveRecord
{
    public $selected_categories;
//    public $attribute;
//    public $attributes_value;
    public $image;
    public $galery;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'body', 'price', 'selected_categories'], 'required'],
            [['body'], 'string'],
            [['price', 'status', 'created_at', 'updated_at', 'deleted_at', 'seo'], 'integer'],
            [['title'], 'string', 'max' => 225],
            [['selected_categories', 'statusList'], 'safe'],
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['galery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 4]

//            TODO validate is integer
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Назва',
            'body' => 'Опис',
            'price' => 'Ціна',
            'image' => 'Головне зораження',
            'galery' => 'Галерея',
            'status' => 'Статус',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'seo' => 'Seo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductsCategories()
    {
        return $this->hasMany(ProductsCategories::className(), ['products_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Categories::className(), ['id' => 'categories_id'])->viaTable('products_categories', ['products_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductsMappings()
    {
        return $this->hasMany(ProductsMapping::className(), ['product_id' => 'id']);
    }

    public function getAllAttributesMappings()
    {
        return ArrayHelper::map(Attributes::find()->asArray()->all(), 'id', 'title');
    }

    public function getAllAttributesValuesMappings()
    {
        return ArrayHelper::map(AttributesValues::find()->asArray()->all(), 'id', 'title');
    }

    public function getRelatedAttributesValues()
    {
        return Attributes::find()->with('attributesValues')->all();
//       return Attributes::find()->with('attributesValues')->all();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductsShoppingCarts()
    {
        return $this->hasMany(ProductsShoppingCart::className(), ['products_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShoppingCarts()
    {
        return $this->hasMany(ShoppingCart::className(), ['id' => 'shopping_cart_id'])->viaTable('{{%products_shopping_cart}}', ['products_id' => 'id']);
    }


    public function getAllCategoriesAsArray()
    {
        $categories = \app\models\Categories::find()->all();
        $dropdownData = \yii\helpers\ArrayHelper::map($categories, 'id', 'title');
        return $dropdownData;
    }

    public function afterSave($insert, $changedAttributes)
    {
        if ($insert == false) {
            $this->unlinkAll('categories', true);
        }
        if (!empty($this->selected_categories)) {
            foreach ($this->selected_categories as $category_id) {
                $temp = Categories::findOne($category_id);
                $this->link('categories', $temp);
            }
        }
        parent::afterSave($insert, $changedAttributes);
        // TODO: Change the autogenerated stub
    }

    public function beforeSave($insert)
    {
        $this->updated_at = time();
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }


    public function getStatusList()
    {
        return $statusList = ['1' => 'Active', '0' => 'Inactive', '2' => 'Deleted',];
    }

    public function delete()
    {
        $this->deleted_at = time();
        $this->status = 2;
        $this->save(false); // TODO: Change the autogenerated stub
//        dd($this);
        return true;
    }

    public function upload()
    {
        if ($this->validate()) {
            $path = 'uploads/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path, true);
            $this->attachImage($path);
            @unlink($path);
            return true;
        } else return false;
    }

    public function uploadGalery()
    {
        if ($this->validate()) {
            foreach ($this->galery as $file) {
                $path = 'uploads/store/' . $file->baseName . '.' . $file->extension;
                $file->saveAs($path);
                $this->attachImage($path);
                @unlink($path);
            }
            return true;
        } else return false;
    }
}
