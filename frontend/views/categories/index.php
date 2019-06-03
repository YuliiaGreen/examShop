
<?php
/* @var $categories - */

/* @var $products - */

use common\models\Categories; ?>


<?php //echo '<pre>'?>
<?php //var_dump($categories)?>
<?php //echo '</pre>'?>


<?php
$this->params['categoriesDropdown'] = $categories;

?>
<!-- Home -->
<div class="container-fluid padding text-center">

    <?php foreach ($products

    as $product): ?>
    <div class="row text-center padding align-content-between">
        <h3 class="m-auto col-12"><?= $product->title ?></h3>
        <hr>

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
    <div class="col-12">
        <hr>
    </div>
</div>
<?php endforeach; ?>

<!--<div class="home">-->
<!--    <div class="home_container d-flex flex-column align-items-center justify-content-end">-->
<!--        <div class="home_content text-center">-->
<!--            <div class="home_title">Category Page</div>-->
<!--            <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">-->
<!---->
<!--                --><?php //if (!empty($this->params['categoriesDropdown'])): ?>
<!---->
<!--                    <ul class="d-flex flex-row align-items-start justify-content-start text-center">-->
<!--                        --><?php //foreach ($this->params['categoriesDropdown'] as $category): ?>
<!--                            <li>-->
<!--                                <a href="categories/view?id=--><? //= $category->id ?><!--">--><? //= $category->title ?><!--</a>-->
<!--                            </li>-->
<!--                        --><?php //endforeach; ?>
<!--                    </ul>-->
<!--                    </li>-->
<!--                --><?php //endif;
//                ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="col-xl-4 col-md-6">-->
<!---->
<!--    <div class="products">-->
<!---->
<!--        --><?php
//        foreach ($products
//
//        as $product): ?>
<!---->
<!--        <div class="product">-->
<!--            <div class="product_image"><img src="/images/product_1.jpg" alt=""></div>-->
<!--            <div class="product_content">-->
<!--                <div class="product_info d-flex flex-row align-items-start justify-content-start">-->
<!--                    <div>-->
<!--                        <div>-->
<!--                            <div class="product_name">-->
<!--                                <a href="-->
<!--                                --><? //= Yii::$app->homeUrl ?><!--products/view?id=--><? //= $product->id ?><!--">-->
<!--                                    --><? //= $product->title ?>
<!--                                </a>-->
<!--                                --><? //= $product->created_at ?>
<!--                            </div>-->
<!--                            <div class="product_category">In <a href="category.html">Cat</a></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="ml-auto text-right">-->
<!--                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>-->
<!--                        <div class="product_price text-right"><span>--><? //= $product->price ?><!--</span></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="product_buttons">-->
<!--                    <div class="text-right d-flex flex-row align-items-start justify-content-start">-->
<!--                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">-->
<!--                            <div>-->
<!--                                <div><img src="/images/heart_2.svg" class="svg" alt="">-->
<!--                                    <div>+</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="addProdToCart product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">-->
<!--                            <div>-->
<!--                                <div><img src="/images/cart.svg" class="svg" alt=""></-->
<!--                                >-->
<!--                                <div>+</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        --><? // //= \yii\helpers\Html::a('Додати в кошик', ['cart/add-product', 'id' => $product->id],
//                        //                                  ['class' => 'btn btn-success']) ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!---->
<!--    --><?php //endforeach;
//    ?>
<!--</div>-->

<!--<form action="" class="select-quantity-form">-->
<!--    <select name="quantities" id="">-->
<!--        --><?php //foreach ($pageList as $key):?>
<!--            <option value="--><? //=$key?><!--" --><?php //if($key===$quantities) echo 'selected'?><!--
<? //=$key?></option>-->
<!--        --><?php //endforeach;?>
<!---->
<!--    </select>-->
</form>
<!-- Products -->

