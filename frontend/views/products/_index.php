<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/*  @var $products */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php foreach ($products

    as $product): ?>
    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
        <!-- Block2 -->
        <!--        <div class="block2">-->
        <!--            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">-->
        <!--                <img src="images/item-02.jpg" alt="IMG-PRODUCT">-->
        <!---->
        <!--                <div class="block2-overlay trans-0-4">-->
        <!--                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">-->
        <!--                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>-->
        <!--                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>-->
        <!--                    </a>-->
        <!---->
        <!--                    <div class="block2-btn-addcart w-size1 trans-0-4">-->
        <!--                       Button -->
        <!--                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">-->
        <!--                            Add to Cart-->
        <!--                        </button>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->

        <div class="block2-txt p-t-20">
            <a href="" class="block2-name dis-block s-text3 p-b-5">
                <?= $product->title ?>
            </a>

            <span class="block2-price m-text6 p-r-5">
									  <?= $product->price ?>
									</span>

        </div>
    </div>
</div>

<?php endforeach; ?>