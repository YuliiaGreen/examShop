<?php

use yii\helpers\Html;

/*@var $categories -tree categories*/
/*@var $model- product*/

$img = $product->getImage();
//print_r($img)
?>


<div class="container-fluid padding text-center">
    <div class="row text-center padding align-content-between border m-2">
        <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-3 text-center m-auto flex-wrap">
            <div class="image ">
                <a href=""><img src="<?= $img->getUrl() ?>" alt=""></a>
            </div>
        </div>

        <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-3 text-center m-auto flex-wrap">
            <div class="d-flex flex-column text-center">
                <div class="name align-self-center  text-center">
                    <a href="/products/view?id=<?= $product->id ?>">
                        <?= $product->title ?>
                    </a
                </div>
                <div class="description align-self-center text-center"><span><?= $product->body ?></span>
                </div>
                <div class="price align-self-center text-center"><span>Ціна: <?= $product->price ?> $</span>
                    </div>
            </div>
            <?= \yii\helpers\Html::a('Додати в кошик', ['cart/add-product', 'id' => $product->id],
                ['class' => 'btn btn-success']) ?>
        </div>
    </div>
</div>

