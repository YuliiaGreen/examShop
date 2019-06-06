<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = $model->title;

$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <!--    <p> Категорія: --><? //=$model->selected_categories ?><!--</p>-->
    <p> Створено: <?= date('Y:m:d', $model->created_at) ?></p>
    <p> Видалено: <?= (empty($model->deleted_at)) ? '-' : date('Y:m:d', $model->deleted_at) ?></p>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]);
        ?>
        <?php $img = $model->getImage(); ?>
        <?php
        if ($model->deleted_at !== null) {
            echo Html::a('Restore', ['restore', 'id' => $model->id], [
                'class' => 'btn btn-success',
            ]);
        }
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'body:ntext',
            'price',
            ['attribute' => 'image',
                'value' => "<img src='{$img->getUrl()}'>",
                'format' => 'html'
            ],
            'status',
//            'created_at',
//            'updated_at',
//            'deleted_at',
        ],
    ]) ?>

</div>
