<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Categories */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="categories-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>

<? //= DetailView::widget([
//    'model' => $model,
//    'attributes' => [
//        'id',
//        'title',
//        'body:ntext',
//        'price',
//        ['attribute' => 'image',
//            'value' => "<img src='{$img->getUrl()}'>",
//            'format' => 'html'
//        ],
//        'status',
//        'created_at',
//        'updated_at',
//        'deleted_at',
//    ],
//])
$img = $model->getImage(); ?>

<div class="col container-fluid padding text-center">
    <table class="table col-10 m-auto">
<!--        <a href=""><img src="--><?//= $img->getUrl() ?><!--" alt=""></a>-->
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Назва</th>
            <th scope="col">Опис</th>
            <th scope="col">Батьківський елемент</th>
            <th scope="col">Статус</th>
            <th scope="col">Створено</th>
            <th scope="col">Видалено</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($model)): ?>
            <tr>

                <td><?= $model->id ?></td>
                <td><a href="../categories/view?id=<?= $model->id ?>"><?= $model->title ?></a></td>
                <td><?= $model->body ?></td>
                <td><a href="../categories/view?id=<?= $model->parent_id ?>"><?= $model->parent->title ?></a></td>
                <td><?= $model->status ?></td>
                <td><?= date('Y:m:d', $model->created_at) ?></td>
                <td><?= (empty($model->deleted_at)) ? '-' : date('Y:m:d', $model->deleted_at) ?></td>
            </tr>

        <?php endif; ?>

        </tbody>
    </table>
</div>

<!--        --><?php //if (!empty($model)): ?>
<!--        <div class="col container-fluid padding text-center">-->
<!--            <table class="table col-10 m-auto">-->
<!--                <tbody>-->
<!--                <tr>-->
<!--                    <th scope="col">id</th>-->
<!--                    <td class="text-left">--><? //= $model->id?><!--</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th scope="col">Назва</th>-->
<!--                    <td class="text-left"><a href="../categories/view?id=--><? //= $model->id ?><!--">--><? //= $model->title ?><!--</a></td>-->
<!---->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th scope="col">Опис</th>-->
<!--                    <td class="text-left">--><? //= $model->body ?><!--</td>-->
<!---->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th scope="col">Батьківський елемент</th>-->
<!--                    <td class="text-left"><a href="../categories/view?id=--><? //=$model->parent_id?><!--">--><? //=$model->parent->title?><!--</a></td>-->
<!---->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th scope="col">Статус</th>-->
<!--                    <td class="text-left">--><? //=$model->status  ?><!--</td>-->
<!---->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th scope="col">Створено</th>-->
<!--                    <td class="text-left">--><? //=date('Y:m:d',$model->created_at)  ?><!--</td>-->
<!---->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th scope="col">Видалено</th>-->
<!--                    <td class="text-left">--><? //= (empty($model->deleted_at))?'-':date('Y:m:d',$model->deleted_at)  ?><!--</td>-->
<!---->
<!--                </tr>-->
<!--                </tbody>-->
<!--            </table>-->
<!--                --><?php //endif; ?>
<!--        </div>-->
