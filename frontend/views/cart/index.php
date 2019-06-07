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
            <th scope="col">Зображення</th>
            <th scope="col">Назва</th>
            <th scope="col">Ціна, $</th>
            <th scope="col">Кількість</th>
            <th scope="col">Збільшити</th>
            <th scope="col">Зменшити</th>
            <th scope="col">Сума, $</th>
            <th scope="col">Видалити</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($cart->products)): ?>
            <?php $sum = 0;
            $i = 1;
            $img = $cart->getImage();
            foreach ($cart->products as $item):
                $img = $item->getImage(); ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <th scope="row"><a href=""><img src="<?= $img->getUrl() ?>" alt=""></a></th>
                    <td><a href="../products/view?id=<?= $item->id ?>"><?= $item->title ?></a></td>
                    <td><?= $item->price ?></td>
                    <td><?= $quantity[$item->id] ?></td>

                    <td>
                        <button><?= \yii\helpers\Html::a('+', ['cart/more-product', 'id' => $item->id]) ?></button>
                    </td>
                    <td>
                        <button><?= \yii\helpers\Html::a('-', ['cart/less-product', 'id' => $item->id]) ?></button>
                    </td>
                    <td><?= $item->price * $quantity[$item->id] ?></td>
                    <td>
                        <button><?= \yii\helpers\Html::a('Видалити', ['cart/del-product', 'id' => $item->id]) ?></button>
                    </td>
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
            <td></td>
            <td></td>
            <td></td>
            <td>Всього:</td>
            <td> <?= $sum; ?> </td>
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
