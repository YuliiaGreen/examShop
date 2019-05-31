<?php
/* @var $this yii\web */
/* @var $products array */
/* @var $page */
/* @var $quantities */
/* @var $limits */
/* @var $pageList */
/* @var pag */
/* @var $this yii\web\View */

/* @var $model app\models\Products */

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\LinkPager;
?>


<div class="container-fluid padding text-center">
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

    <!--    --><? //= LinkPager::widget([
    //        'pagination' => $pages,
    //    ]); ?>

    <?php echo $this->render('paginator', [
        'limits' => $limits,
        'page' => $page]);

    ?>

    <? //= Yii::$app->controller->render('paginator', ['limits', 'page']); ?>
    <!--                        --><? //= $this->render('paginator',compact('limits','page'))?>
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


