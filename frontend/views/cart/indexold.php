<?php
/* @var $this yii\web\View
 * @var $cart from CartController action index
 */

?>
<h1>Shopping-cart</h1>

<p>
    <?php
    foreach ($cart->products as $item) {
        echo $item->title . ' ' . $item->price . '<br><hr>';
    }
    ?>
    <?= \yii\helpers\Html::a('Купити', ['cart/confirm-cart',
        'class' => 'btn btn-success']) ?>

</p>
