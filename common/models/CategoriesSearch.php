<?php

namespace common\models;

use common\models\Categories;
use yii\base\Model;
use yii\data\ActiveDataProvider;


/**
 * CategoriesSearch represents the model behind the search form of `common\models\Categories`.
 */
class CategoriesSearch extends Categories
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'image_id', 'parent_id', 'status', 'created_at', 'updated_at', 'deleted_at', 'seo'], 'integer'],
            [['title', 'body'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Categories::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'image_id' => $this->image_id,
            'parent_id' => $this->parent_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
            'seo' => $this->seo,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'body', $this->body]);

        return $dataProvider;
    }

    public static function getParentCategories()
    {
        //відбираємо батьківські категорії
        $query = Categories::find()->where(['is', 'parent_id', null])->with('categories')->all();
//        для кожної батьківської записуємо в чілдрен айтем в якого батьківський елемент такий як поточний ід
        foreach ($query as $item) {
            $item->children = Categories::find()->where(['=', 'parent_id', $item->id])->all();
        }
        return $query;
    }
}
