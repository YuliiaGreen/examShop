<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Categories', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
//            'body:ntext',
            'status',
//            'category_id'=>$this->get

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
<!--<div class="col container-fluid padding text-center">-->
<!--    <table class="table col-10 m-auto">-->
<!--        <thead class="thead-dark">-->
<!--        <tr>-->
<!--            <th scope="col" class="align-baseline">id</th>-->
<!--            <th scope="col">Назва</th>-->
<!--            <th scope="col">Опис</th>-->
<!--            <th scope="col" class="align-self-auto">Батьківський елемент</th>-->
<!--            <th scope="col">Статус</th>-->
<!--            <th scope="col">Створено</th>-->
<!--            <th scope="col">Видалено</th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        --><?php //if (!empty($dataProvider)): ?>
<!--        --><?php //foreach ($dataProvider as $model):?>
<!--            <tr>-->
<!--                <td>--><? //= $model->id?><!--</td>-->
<!--                <td class="text-left"><a href="../categories/view?id=--><? //= $model->id ?><!--">--><? //= $model->title ?><!--</a></td>-->
<!--                <td class="text-left">--><? //= $model->body ?><!--</td>-->
<!--                <td class="text-left"><a href="../categories/view?id=--><? //=$model->parent_id?><!--">--><? //=$model->parent->title?><!--</a></td>-->
<!--                <td>--><? //=$model->status  ?><!--</td>-->
<!--                <td>--><? //=date('Y:m:d',$model->created_at)  ?><!--</td>-->
<!--                <td>--><? //= (empty($model->deleted_at))?'-':date('Y:m:d',$model->deleted_at)  ?><!--</td>-->
<!--            </tr>-->
<?php //endforeach; ?>
<!--        --><?php //endif; ?>
<!---->
<!--        </tbody>-->
<!--    </table>-->
<!--</div>-->