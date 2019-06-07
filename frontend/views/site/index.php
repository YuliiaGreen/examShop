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
            <img src="/images/Screenshot_2019-04-10-08-24-33-220_com.mi.android.globalFileexplorer.png" alt="">
            <div class="carousel-caption">
                <h1>Гравітацiйні практики</h1>
                <h3>Можуть навіть діти</h3>
                <button type="button" class="btn btn-outline-light btn-lg">
                    <?= \yii\helpers\Html::a('хочу спробувати', ['site/contact/']) ?>
                </button>
                <!--                <button type="button" class="btn btn-primary btn-lg">-->
                <!--                    SIGN UP-->
                <!--                </button>-->
            </div>
        </div>
        <div class="carousel-item">
            <img src="/images/Screenshot_2019-04-10-08-13-39-829_com.mi.android.globalFileexplorer.png" alt="">
            <div class="carousel-caption">
                <h3 style="">Гравітаційне тренування – це заняття, в основі якого лежить взаємодія маси тіла з силою
                    земного
                    тяжіння.
                    <br>

            </div>
        </div>

        <div class="carousel-item">
            <img src="/images/Screenshot_2019-04-10-08-09-15-655_com.mi.android.globalFileexplorer.png" alt="">
            <div class="carousel-caption">
                <h3 style="">
                    Регулярні гравітаційні заняття: <br>
                    - покращують розумову діяльність; <br>
                    - збільшують концентрацію уваги; <br>
                    - гармонізують емоційний стан; <br>
                    - нормалізують сон.
                </h3>


            </div>
        </div>
    </div>
</div>
<!--three column section-->
<div class="container-fluid padding text-center">
    <!--    <hr class="my-4">-->
    <h2 class=" align-baseline p-t-1 p-b-1" style="background-color: whitesmoke">Новини</h2>

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
    <!--    <hr class="my-4">-->
</div>
<!--/three column section-->
<!---->
<!--<div class="container-fluid padding text-center">-->
<!--    <h2 class="p-t-1 p-b-1" style="background-color: whitesmoke"> Нові поступлення</h2>-->

<!--    <div class="row text-center padding align-content-between">-->
<!--        --><?php
//        foreach ($new
//                 as $product): ?><!----><?php //$img = $product->getImage();
//            ?>
<!--             Карточка с card-img-top -->
<!--            <div class="card  col-sm-12 col-md-6 col-lg-4  text-center m-auto flex-wrap">-->
<!--                 Изображение -->
<!--                <div class="parent m-auto">-->
<!--                    <img class="card-img-top h-75" src="--><? //= $img->getUrl('') ?><!--" alt="...">-->
<!--                </div>-->
<!--                 Текстовый контент -->
<!--                <div class="card-body">-->
<!--                    <h4 class="card-title"><a class="card-link" href="/products/view?id=--><? //= $product->id ?><!--">-->
<!--                            --><? //= $product->title ?>
<!--                        </a></h4>-->
<!--                    <h6 class="card-subtitle mb-2 text-muted">Ціна: --><? //= $product->price ?><!-- $</h6>-->
<!--                    <p class="card-text">--><? //= mb_substr($product->body, 0, 30) ?><!--...</p>-->
<!--                --><? //= \yii\helpers\Html::a('Додати в кошик', ['cart/add-product', 'id' => $product->id],
//                    ['class' => 'btn btn-primary btn-buy']) ?>
<!--            </div>-->
<!--            </div>Конец карточки -->
<!--                </div>-->
<!--       </div>-->
<!--    --><?php //endforeach; ?>
<!---->
<!--</div>-->
<div class="container-fluid padding text-center">
    <h2 class="p-t-1 p-b-1" style="background-color: whitesmoke"> Всі товари</h2>

    <div class="row text-center padding align-content-between">
        <?php foreach ($products as $product): ?>
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
            <!--    </div>-->
    <?php endforeach; ?>
</div>

<?php //print_r($pageList);?>
    <div class="col m-auto">
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
</div>
<div class="container-fluid padding text-center">


    <?php echo $this->render('paginator', [
        'limits' => $limits,
        'page' => $page]);

    ?>

</div>

<!--<div class="col">-->
<!--    <form action="/site" class="select-quantity-form">-->
<!--        <select name="quantities" id="">-->
<!--            --><?php //foreach ($pageList as $key): ?>
<!--                <option value="--><? //= $key ?>
<!--                    --><?php //if ($key === $quantities) echo 'selected' ?>
<? //= $key ?>
<!--                </option>-->
<!--            --><?php //endforeach; ?>
<!--        </select>-->
<!--    </form>-->

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
