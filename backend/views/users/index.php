<?php
/* @var $this yii\web\View */
?>
<!--<h1>Users</h1>-->
<!---->
<!--<p>-->
<!--    You may change the content of this page by modifying-->
<!--    the file <code>--><? //= __FILE__; ?><!--</code>.-->
<!--</p>-->
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!--        --><? //= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'surname',
            'fathersname',
            'sex',
            'dateOfBirth',
            'phoneNomber',
            'city',
            'email',
            'status',
            'created_at',
            'updated_at',
            'deleted_at',

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
