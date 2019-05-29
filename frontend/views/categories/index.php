<!DOCTYPE html>
<html lang="en">
<title>Category</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="css/category.css">
<link rel="stylesheet" type="text/css" href="css/category_responsive.css">


<?php
/* @var $categories - */

/* @var $products - */

use common\models\Categories; ?>


<?php //echo '<pre>'?>
<?php //var_dump($categories)?>
<?php //echo '</pre>'?>
<? //= foreach ($test as $category){
//    echo $category->title;
//}
//?>

<?php
$this->params['categoriesDropdown'] = $categories;

?>


<title>Category</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/css/bootstrap-4.1.2/bootstrap.min.css">
<link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="/css/category.css">
<link rel="stylesheet" type="text/css" href="/css/category_responsive.css">
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="css/bootstrap-4.1.2/bootstrap.min.css">


<!-- Home -->

<div class="home">
    <div class="home_container d-flex flex-column align-items-center justify-content-end">
        <div class="home_content text-center">
            <div class="home_title">Category Page</div>
            <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">

                <?php if (!empty($this->params['categoriesDropdown'])): ?>

                    <ul class="d-flex flex-row align-items-start justify-content-start text-center">
                        <?php foreach ($this->params['categoriesDropdown'] as $category): ?>
                            <li>
                                <a href="categories/view?id=<?= $category->id ?>"><?= $category->title ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    </li>
                <?php endif;
                ?>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-md-6">

    <div class="products">

        <?php
        foreach ($products

        as $product): ?>

        <div class="product">
            <div class="product_image"><img src="/images/product_1.jpg" alt=""></div>
            <div class="product_content">
                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                    <div>
                        <div>
                            <div class="product_name">
                                <a href="
                                <?= Yii::$app->homeUrl ?>products/view?id=<?= $product->id ?>">
                                    <?= $product->title ?>
                                </a>
                                <?= $product->created_at ?>
                            </div>
                            <div class="product_category">In <a href="category.html">Cat</a></div>
                        </div>
                    </div>
                    <div class="ml-auto text-right">
                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                        <div class="product_price text-right"><span><?= $product->price ?></span></div>
                    </div>
                </div>
                <div class="product_buttons">
                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                            <div>
                                <div><img src="/images/heart_2.svg" class="svg" alt="">
                                    <div>+</div>
                                </div>
                            </div>
                        </div>
                        <div class="addProdToCart product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                            <div>
                                <div><img src="/images/cart.svg" class="svg" alt=""></
                                >
                                <div>+</div>
                            </div>
                        </div>
                        <? //= \yii\helpers\Html::a('Додати в кошик', ['cart/add-product', 'id' => $product->id],
                        //                                  ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php endforeach;
    ?>
</div>

<!--<form action="" class="select-quantity-form">-->
<!--    <select name="quantities" id="">-->
<!--        --><?php //foreach ($pageList as $key):?>
<!--            <option value="--><? //=$key?><!--" --><?php //if($key===$quantities) echo 'selected'?><!-->-->
<? //=$key?><!--</option>-->
<!--        --><?php //endforeach;?>
<!---->
<!--    </select>-->
</form>
<!-- Products -->


<script src="js/jquery-3.2.1.min.js"></script>
<script src="css/bootstrap-4.1.2/popper.js"></script>
<script src="css/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/Isotope/fitcolumns.js"></script>
<script src="js/category.js"></script>
</body>
</html>