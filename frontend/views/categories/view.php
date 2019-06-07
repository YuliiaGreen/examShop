
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $product common\models\Categories */
//?>


<!-- Home -->
<div class="container-fluid padding text-center">

    <h2 class="m-auto col-12"><?= $product->title ?></h2>
    <hr>
    <h3 class="m-auto col-12"><?= $product->body ?></h3>
    <?php if (empty($children)): ?>
        <div class="row text-center padding align-content-between">
        <?php foreach ($product->products as $item): ?>
            <?php $img = $item->getImage('x300'); ?>
            <!-- Карточка с card-img-top -->
            <div class="card  col-sm-12 col-md-6 col-lg-4  text-center m-auto flex-wrap m-1">
                <!-- Изображение -->
                <div class="parent m-auto">
                    <img class="card-img-top w-100" src="<?= $img->getUrl('') ?>" alt="...">
                </div>
                <!-- Текстовый контент -->
                <div class="card-body">
                    <h4 class="card-title"><a class="card-link" href="/products/view?id=<?= $item->id ?>">
                            <?= $item->title ?>
                        </a></h4>
                    <h6 class="card-subtitle mb-2 text-muted">Ціна: <?= $item->price ?> $</h6>
                    <p class="card-text"><?= mb_substr($item->body, 0, 30) ?>...</p>
                    <?= \yii\helpers\Html::a('Додати в кошик', ['cart/add-product', 'id' => $item->id],
                        ['class' => 'btn btn-primary btn-buy']) ?>
                </div>
            </div>
            <!--            </div>-->
        <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
<!--        </div>-->

    <?php if (!empty($children)): ?>
        <div class="container-fluid padding text-center">
            <!--        <div class="row text-center padding align-content-between">-->

        <?php foreach ($children as $child): ?>
            <h3 class="m-auto col-12" style="background-color: whitesmoke"><?= $child->title ?></h3>

            <h3 class="m-auto col-12"><?= $child->body ?></h3>

            <div class="row text-center padding align-content-between">

                <?php foreach ($child->products as $product): ?>
                    <?php $img = $product->getImage('x300'); ?>
                    <!-- Карточка с card-img-top -->
                    <div class="card  col-sm-12 col-md-6 col-lg-4  text-center m-auto flex-wrap m-1">
                        <!-- Изображение -->
                        <div class="parent m-auto">
                            <img class="card-img-top w-100" src="<?= $img->getUrl('') ?>" alt="...">
                        </div>
                        <!-- Текстовый контент -->
                        <div class="card-body">
                            <h4 class="card-title"><a class="card-link" href="/products/view?id=<?= $product->id ?>">
                                    <?= $product->title ?>
                                </a></h4>
                            <h6 class="card-subtitle mb-2 text-muted">Ціна: <?= $product->price ?> $</h6>
                            <p class="card-text"><?= mb_substr($product->body, 0, 30) ?>...</p>
                            <?= \yii\helpers\Html::a('Додати в кошик', ['cart/add-product', 'id' => $product->id],
                                ['class' => 'btn btn-primary btn-buy']) ?>
                    </div>
                    </div><!-- Конец карточки -->

            <?php endforeach; ?>
            </div>


        <?php endforeach; ?>
        </div>
    <?php endif; ?>

