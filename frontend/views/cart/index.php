<?php

/* @var $cart frontend/controller/Cart Controller= ShoppingCart::findLastCart(); */

/* @var $quantity frontend/controller/Cart Controller */

use frontend\models\ShoppingCart;
?>
<div class="container-fluid padding text-center">
    <div class="row text-center padding align-content-between">
        <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-3 text-center m-auto flex-wrap">
            <h1>
                    <?php if (Yii::$app->session->hasFlash('info')) {
                        echo Yii::$app->session->getFlash('info');
                    } else {
                        echo 'Shopping cart';
                    }
                    ?>
            </h1>
                </div>

            </div>
        </div>
    </div>

    <!-- Cart -->
<div class="col container-fluid padding text-center">
    <table class="table col-10 m-auto">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">img</th>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($cart->products)): ?>
            <?php $sum = 0;
            $i = 1;
            foreach ($cart->products as $item):?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <th scope="row">img</th>
                    <td><a href="../products/view?id=<?= $item->id ?>"><?= $item->title ?></a></td>
                    <td><?= $item->price ?></td>
                    <td><?= $quantity[$item->id] ?></td>
                    <td><?= $item->price * $quantity[$item->id] ?></td>
                </tr>
                <?php
                $sum += $item->price * $quantity[$item->id];
                $i++;
            endforeach; ?>
        <?php endif; ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Total:</td>
            <td> <?= $sum; ?></td>
        </tr>
        </tbody>
    </table>
</div>
<div class="container-fluid padding text-center">
    <div class="row text-center padding align-content-between">
        <div class="col text-center m-auto flex-wrap">
            <br>
            <!-- Cart Buttons -->
            <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
                <div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
                    <?php if (!empty($cart->products)): ?>
                        <?= \yii\helpers\Html::a('Оформити покупку', ['cart/confirm-cart'], ['class' => 'btn btn-success m-2']) ?>
                        <br>
                        <?= \yii\helpers\Html::a('Очистити кошик', ['cart/delete'], ['class' => 'btn btn-success m-2']) ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
