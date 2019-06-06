<?php
/*@var $categories - список категорій дропдауном*/
/*@var $products - */
/*@var $pageList -   */

/*@var $quantities -   */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->params['categoriesDropdown'] = $categories;
?>
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/images/slides1.jpg" alt="">
            <div class="carousel-caption">
                <h1>examShop</h1>
                <h3> description of the shop</h3>
                <button type="button" class="btn btn-outline-light btn-lg">
                    BUTTON
                </button>
                <button type="button" class="btn btn-primary btn-lg">
                    SIGN UP
                </button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/images/slides2.png" alt="">
        </div>
        <div class="carousel-item">
            <img src="/images/slides3.png" alt="">
        </div>
    </div>
</div>
<!--three column section-->
<div class="container-fluid padding">
    <hr class="my-4">
    <div class="row text-center ">
        <div class="col-xs-12 col-sm-6 col-md-4 m-t-2">
            <!--            <i class="fa fa-american-sign-language-interpreting"></i>-->
            <img class="img p-t-2" src="/images/brain/images (4).jpg" alt="">
            <h3>New 1</h3>
            <p>New1 Text</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <!--            <i class="fa fa-hands-helping"></i>-->
            <img class="img" src="/images/brain/images (5).jpg" alt="">
            <h3>New 2</h3>
            <p>New2 Text</p>
        </div>
        <div class="col-sm-12  col-md-4">
            <!--            <i class="fa fa-hand-holding-heart"></i>-->
            <img class="img" src="/images/brain/images (6).jpg" alt="">

            <h3>New 3</h3>
            <p>New3 Text</p>
        </div>
    </div>
    <hr class="my-4">
</div>
<!--/three column section-->

<div class="container-fluid padding text-center">
    <h2> Нові поступлення</h2>

    <div class="row text-center padding align-content-between">
        <?php foreach ($new

        as $product): ?>
        <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center m-auto flex-wrap">
            <!--<div class="overflow-auto pos-absolute">-->
            <!--<div class="row text-center padding align-content-between">-->
            <!--    <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-3 text-center m-auto ">-->
            <div class=" ">
                <div class="image ">
                    <a href=""><img src="/images/logo.png" alt=""></a>
                </div>
                <div class="d-flex flex-column text-center">
                    <div class="name align-self-center  text-center">
                        <a href="/products/view?id=<?= $product->id ?>">
                            <?= $product->title ?>
                        </a
                    </div>
                    <div class="description align-self-center text-center"><span><?= $product->body ?></span>
                    </div>
                    <div class="price align-self-center text-center"><span>Price</span><?= $product->price ?>
                    </div>
                </div>
                <?= \yii\helpers\Html::a('Додати в кошик', ['cart/add-product', 'id' => $product->id],
                    ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <!--    </div>-->
    <?php endforeach; ?>
    <hr class="my-4">
</div>
<div class="container-fluid padding text-center">
    <h2>Всі товари</h2>
    <div class="row text-center padding align-content-between">
        <?php foreach ($products

        as $product): ?>
        <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-3 text-center m-auto flex-wrap">
            <div class=" ">
                <div class="image ">
                    <a href=""><img src="/images/logo.png" alt=""></a>
                </div>
                <div class="d-flex flex-column text-center">
                    <div class="name align-self-center  text-center">
                        <a href="/products/view?id=<?= $product->id ?>">
                            <?= $product->title ?>
                        </a
                    </div>
                    <div class="description align-self-center text-center"><span><?= $product->body ?></span>
                    </div>
                    <div class="price align-self-center text-center"><span>Price</span><?= $product->price ?>
                    </div>
                </div>
                <?= \yii\helpers\Html::a('Додати в кошик', ['cart/add-product', 'id' => $product->id],
                    ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
</div>
<?php //print_r($pageList);?>
<div class="col">
    <form action="" class="select-quantity-form">
        <select name="quantities" id="">
            <?php foreach ($pageList as $key): ?>
                <option value="<?= $key ?>"
                    <?php if ($key === $quantities) echo 'selected' ?>>
                    <?= $key ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>

</div>
<div class="container-fluid padding text-center">


    <?php echo $this->render('paginator', [
        'limits' => $limits,
        'page' => $page]);

    ?>

</div>
<!---->
<!--<div class="col">-->
<!--    <form action="/site" class="select-quantity-form">-->
<!--        <select name="quantities" id="">-->
<!--            --><?php //foreach ($pageList as $key): ?>
<!--                <option value="--><? //= $key ?><!--"-->
<!--                    --><?php //if ($key === $quantities) echo 'selected' ?><!--
                   --><? //= $key ?>
<!--                </option>-->
<!--            --><?php //endforeach; ?>
<!--        </select>-->
<!--    </form>-->
<!---->
<!--</div>-->
<!--<div class="container-fluid padding text-center">-->
<!---->
<!--    --><? //= LinkPager::widget([
//        'pagination' => $pages,
//        'class' => 'text-center'
//    ]); ?>
<!--</div>-->

<!--</div>-->


<!--    <div class="col-md-12">-->
<!--        <div class="row">-->
<!--            <div class=" col col-sm-12 col-md-6 col-lg-4 col-xl-3">-->
<!--                --><? //= \yii\helpers\Html::a('<img src="/images/noimage.png">',
//                    ['/products/view', 'id' => $product->id],
//                    ['target' => "_blank"]) ?>


<!--    window.onload = function () {-->
<!--        $('.addProdToCart').on('click', function (ev) {-->
<!--            ev.preventDefault();-->
<!--            $.get('/cart/add-product?id=--><? //=$model->id?>
<!--function (msg) {-->
<!--//-->
<!--//                console.log(msg);-->
<!--//                if (msg.status === 'error') {-->
<!--//                    $('.ajax-response').html('Product can not be added to the cart');-->
<!--//                } else {-->
<!--//                    $('.ajax-response').html('Product added to the cart');-->
<!--//                }-->
<!--//            })-->
<!--//        })-->
<!--//-->
<!--//-->
<!--//        $('.addProdToCart').on('click', function (ev) {-->
<!--//            ev.preventDefault();-->
<!--//            $.get('/cart/add-product?id=--><? // //=$model->id?><!--//', function (msg) {-->
<!--//-->
<!--//                console.log(msg); // if (msg.status === 'error') {-->
<!--//                //     $('.ajax-response').html('Product can not be added to the cart');-->
<!--//                // } else {-->
<!--//                //     $('.ajax-response').html('Product added to the cart');-->
<!--//                // }-->
<!--//            })-->
<!--//        })-->
<!--//        $('.select-quantity-form').on('change', function () {-->
<!--//            $('.select-quantity-form').submit();-->
<!--//        })-->
<!--//    }-->
<!--//</script>-->
