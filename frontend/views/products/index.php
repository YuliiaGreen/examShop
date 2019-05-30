<?php
/* @var $this yii\web */
/* @var $products array */
/* @var $page */
/* @var $quantities */
/* @var $limits */
/* @var $pageList */
/* @var pag */
?>
<!--<link rel="stylesheet" type="text/css" href="/css/bootstrap-4.1.2/bootstrap.min.css">-->
<!--<link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
<!--<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">-->
<!--<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">-->
<!--<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">-->
<!--<link rel="stylesheet" type="text/css" href="/css/category.css">-->
<!--<link rel="stylesheet" type="text/css" href="/css/category_responsive.css">-->
<!-- Home -->

<!--<div class="home">-->
<!--    <div class="home_container d-flex flex-column align-items-center justify-content-end">-->
<!--        <div class="home_content text-center">-->
<!--            <div class="home_title">Category Page</div>-->
<!--            <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">-->
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
<!--<form action="" class="select-quantity-form">-->
<!--    <select name="quantities" id="">-->
<!--        --><?php //foreach ($pageList as $key): ?>
<!--            <option value="--><? //= $key ?><!--" --><?php //if ($key === $quantities) echo 'selected' ?><!-->--><? //= $key ?><!--</option>-->
<!--        --><?php //endforeach; ?>
<!---->
<!--    </select>-->
<!--</form>-->
<!-- Products -->
<!---->
<!--<div class="products">-->
<!--    <div class="container">-->


<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item">
            <img src="/images/slides1" alt="" class="active">
        </div>
        <div class="carousel-item">
            <img src="/images/slides2" alt="">
        </div>
        <div class="carousel-item">
            <img src="/images/slides3" alt="">
        </div>
    </div>
</div>
        <div class="row products_bar_row">
            <div class="col">
                <div class="products_bar d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
                    <div class="products_bar_links">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li><a href="#">All</a></li>
                            <li><a href="#">Hot Products</a></li>
                            <li class="active"><a href="#">New Products</a></li>
                            <li><a href="#">Sale Products</a></li>
                        </ul>
                    </div>
                    <div class="products_bar_side d-flex flex-row align-items-center justify-content-start ml-lg-auto">
                        <div class="products_dropdown product_dropdown_sorting">
                            <div class="isotope_sorting_text"><span>Default Sorting</span><i class="fa fa-caret-down"
                                                                                             aria-hidden="true"></i>
                            </div>
                            <ul>
                                <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>
                                    Default
                                </li>
                                <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>Price</li>
                                <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>Name</li>
                            </ul>
                        </div>
                        <div class="product_view d-flex flex-row align-items-center justify-content-start">
                            <div class="view_item active"><img src="/images/view_1.png" alt=""></div>
                            <div class="view_item"><img src="/images/view_2.png" alt=""></div>
                            <div class="view_item"><img src="/images/view_3.png" alt=""></div>
                        </div>
                        <div class="products_dropdown text-right product_dropdown_filter">
                            <div class="isotope_filter_text"><span>Filter</span><i class="fa fa-caret-down"
                                                                                   aria-hidden="true"></i></div>
                            <ul>
                                <li class="item_filter_btn" data-filter="*">All</li>
                                <li class="item_filter_btn" data-filter=".hot">Hot</li>
                                <li class="item_filter_btn" data-filter=".new">New</li>
                                <li class="item_filter_btn" data-filter=".sale">Sale</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row products_row products_container grid">

            <!-- Product -->
            <?php
            echo count($products);
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            foreach ($products

            as $product):
            ?>
            <div class="col-xl-4 col-md-6">
                <div class="product">
                    <div class="product_image">
                        <?= \yii\helpers\Html::a('<img src="/images/noimage.png">', ['products/view', 'id' => $product->id], ['target' => "_blank"]) ?>
                        <img src="/images/product_1.jpg" alt="">
                    </div>
                    <div class="product_content">
                        <div class="product_info d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div>
                                    <div class="product_name"><a
                                                href="../products/view?id=<?= $product->id ?>"><?= $product->title ?></a>
                                        <?= $product->created_at ?>
                                    </div>
                                    <div class="product_category">In <a href="category.html">Cat</a></div>
                                </div>
                            </div>
                            <div class="ml-auto text-right">
                                <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i>
                                </div>
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
                                <!--                                                --><? //= \yii\helpers\Html::a('Додати в кошик', ['cart/add-product', 'id' => $product->id],
                                //                                                    ['class' => 'btn btn-success'])
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;
        ?>

    </div>
    <div class="row paginator">
        <?php $this->render('paginator', [
            'limits' => $limits,
            'page' => $page]);
        ?>
        <?= Yii::$app->controller->render('paginator', ['limits', 'page']); ?>
        <!--                --><? //= $this->render('paginator',compact('limits','page'))?>
    </div>

</div>

</div>
</div>
</div>

<script>
    //window.onload=function() {
    //    var page=<?//=$page-1?>//;
    //    $('btn.btn-success.prev-page').on('click', function (ev) {
    //        ev.preventDefault();
    //        $.get('/products/index?page='+page+'&quantities=<?//=$quantities?>//, function (msg) {
    //        page--;
    //        console.log(msg);
    //        // if (msg.status === 'error') {
    //            //     $('.ajax-response').html('Product can not be added to the cart');
    //            // } else {
    //            //     $('.ajax-response').html('Product added to the cart');
    //            // }
    //        })
    //
    //}
    //$('btn.btn-success.next-page').on('click', function (ev) {
    //    ev.preventDefault();
    //    $.get('/products/index?page=<?//=($page+1)?>//&quantities=<?//=$quantities?>//, function (msg) {
    //    // if (msg.status === 'error') {
    //    //     $('.ajax-response').html('Product can not be added to the cart');
    //    // } else {
    //    //     $('.ajax-response').html('Product added to the cart');
    //    // }
    //})

</script>


