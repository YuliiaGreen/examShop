
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $product common\models\Categories */
//?>


<!-- Home -->
<div class="container-fluid padding text-center">

    <h1 class="m-auto col-12"><?= $product->title ?></h1>
        <hr>
        <h2 class="m-auto col-12"><?= $product->body ?></h2>
    <?php if (empty($children)): ?>
        <div class="row text-center padding align-content-between">
        <?php foreach ($product->products as $item): ?>
            <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-3 text-center m-auto flex-wrap">
            <div class=" ">
                <div class="image ">
                    <a href=""><img src="/images/logo.png" alt=""></a>
                </div>
                <div class="d-flex flex-column text-center">
                    <div class="name align-self-center  text-center">
                        <a href="/products/view?id=<?= $item->id ?>">
                            <?= $item->title ?>
                        </a
                    </div>
                    <div class="description align-self-center text-center"><span><?= $item->body ?></span>
                    </div>
                    <div class="price align-self-center text-center"><span>Price</span><?= $item->price ?>
                    </div>
                </div>
                <?= \yii\helpers\Html::a('Додати в кошик', ['cart/add-product', 'id' => $item->id],
                    ['class' => 'btn btn-success']) ?>
            </div>
            </div>
            </div>
        <?php endforeach; ?>

    <?php endif; ?>


    <?php if (!empty($children)): ?>
        <div class="container-fluid padding text-center">
        <div class="row text-center padding align-content-between">

        <?php foreach ($children as $child): ?>
            <h2 class="m-auto col-12"><?= $child->title ?></h2>
            <h3 class="m-auto col-12"><?= $child->body ?></h3>

            <?php foreach ($child->products as $item): ?>
                <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-3 text-center m-auto flex-wrap">
                    <div class=" ">
                        <div class="image ">
                            <a href=""><img src="/images/logo.png" alt=""></a>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <div class="name align-self-center  text-center">
                                <a href="/products/view?id=<?= $item->id ?>">
                                    <?= $item->title ?>
                                </a
                            </div>
                            <div class="description align-self-center text-center"><span><?= $item->body ?></span>
                            </div>
                            <div class="price align-self-center text-center"><span>Price</span><?= $item->price ?>
                            </div>
                        </div>
                        <?= \yii\helpers\Html::a('Додати в кошик', ['cart/add-product', 'id' => $item->id],
                            ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
                </div>

            <?php endforeach; ?>

            </div>
        <?php endforeach; ?>

    <?php endif; ?>
</div>