<?php

namespace frontend\controllers;

use common\models\Products;
use app\models\ProductsShoppingCart;
use common\models\User;
use frontend\models\ShoppingCart;
use yii\filters\VerbFilter;
use Yii;
use frontend\models\SignupForm;
use yii\bootstrap\Modal;
use yii\helpers\Html;

class CartController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'add-product' => ['GET'],
                ],
            ],
        ];
    }

    public function actionAddProduct($id)
    {
//        return $this->asJson(['status' => 'error']);

        if (Yii::$app->user->getIsGuest()) {
            Yii::$app->session->setFlash('error', 'Тільки для зареєстрованих користувачів. '
                . Html::a('register', '/site/signup'));
            return Yii::$app->response->redirect('/site/login');
        } else {
            $product = Products::findOne($id);
//            print_r($product);
            $shoppingCart = ShoppingCart::findLastCart();
            if ($shoppingCart->isNewRecord) {
                $shoppingCart->user_id = Yii::$app->user->identity->getId();
                $shoppingCart->save();
            }
            if ($product && $shoppingCart->addProductToCart($product)) {
                if (Yii::$app->request->isAjax) {
                    Yii::$app->session->setFlash('success', 'Продукт додано до кошика');
//                    console.log('success');
                    return $this->asJson(['status' => 'success']); //if we need to get AJAX data
//                    return $this->goBack((!empty(Yii::$app->request->referrer) ?
//                        Yii::$app->request->referrer : null));
                } else {
                    Yii::$app->session->setFlash('success', 'Продукт додано до кошика');
                    return $this->goBack((!empty(Yii::$app->request->referrer) ?
                        Yii::$app->request->referrer : null));
                }
            } else {
                if (Yii::$app->request->isAjax) {
//                console.log('error');
                    Yii::$app->session->setFlash('error', 'Продукт вже додано до кошика');
                    return $this->asJson(['status' => 'error']);
                } else {
                    Yii::$app->session->setFlash('error', 'Продукт вже додано до кошика');
                    return $this->goBack((!empty(Yii::$app->request->referrer) ?
                        Yii::$app->request->referrer : null));
                }
            }
        }
    }

    public function actionIndex()
    {
        if (Yii::$app->user->getIsGuest()) {
            Yii::$app->session->setFlash('error',
                'only for register user. enter or '
                . Html::a('register', 'site/signup'));
            return Yii::$app->response->redirect('site/login');
        } else {
            $cart = ShoppingCart::findLastCart();
//            print_r($cart);
            if (empty($cart->products)) {
                Yii::$app->session->setFlash('info', 'Cart is empty');
            }
            $quantity = [];
            foreach ($cart->products as $product) {
                $quantity[$product->id] = ProductsShoppingCart::find()->where(['=', 'products_id', $product->id])
                    ->andWhere(['=', 'shopping_cart_id', $cart->id])->one()->quantity;

            }
            return $this->render('index', ['cart' => $cart, 'quantity' => $quantity]);
        }
    }

    public function actionAddQtt($id)
    {

    }
    public function actionConfirmCart()
    {
        $shoppingCart = ShoppingCart::findLastCart();
        if ($shoppingCart->isNewRecord) {
            return $this->asJson(['status' => 'error']);
        } else {
            if (!empty(Yii::$app->user->identity['phoneNomber'])) {
            $shoppingCart->status = 'approved';
            if ($shoppingCart->save()) {
                $id = $shoppingCart->id;
                Yii::$app->getSession()->setFlash('success',
                    "Дякуємо! Hомер Вашого замовлення {$shoppingCart->id} Найблищим часом з вами зв*яжеться наш менеджер для уточнення деталей покупки.");
                return $this->redirect('/site/index');
            }
            } else {
                Yii::$app->session->setFlash('error', 'Заповність дані для відправлення');
                return $this->redirect('/user/update');
            }
        }
    }

    public function actionTest()
    {
        $cart = ShoppingCart::findLastCart();
        $this->actionAddProduct('1');
        echo '<pre>';
        var_dump($cart->productsShoppingCarts);
        echo '</pre>';
//        }
//site /index
    }

    public function actionDeleteProduct($id)
    {
        $cart = ShoppingCart::findLastCart();
        $this->actionAddProduct('1');
        echo '<pre>';
        var_dump($cart->productsShoppingCarts);
        echo '</pre>';

    }

    public function actionDelProduct($id)
    {
        $product = Products::findOne($id);
        $shoppingCart = ShoppingCart::findLastCart();
        if ($shoppingCart->isNewRecord) {
            return $this->redirect('/');
        }
        if ($product && $shoppingCart->deleteProductFromCart($product)) {
            //todo:: make this work for success status either
//            return $this->asJson(['status' => 'success']); //if we need to get data with help AJAX.

            Yii::$app->session->setFlash('success', 'Товар видалено з кошика');


            return $this->goBack((!empty(Yii::$app->request->referrer) ? Yii::$app->request->referrer : null));

        }

        if (Yii::$app->request->isAjax) {
            return $this->asJson(['status' => 'error']);
        } else {
            Yii::$app->session->setFlash('error', 'Упс, щось пiшло не так=(');
            return $this->goBack((!empty(Yii::$app->request->referrer) ? Yii::$app->request->referrer : null));
        }

    }

    public function actionPhone()
    {
        return Yii::$app->user->phoneNomber;

    }

    public function actionLessProduct($id)
    {

        $product = Products::findOne($id);

        $shoppingCart = ShoppingCart::findLastCart();
        if ($shoppingCart->isNewRecord) {
            return $this->redirect('/');

        }
        if ($product && $shoppingCart->lessQuantityFromCart($product)) {

            Yii::$app->session->setFlash('success', '-1!');


            return $this->goBack((!empty(Yii::$app->request->referrer) ? Yii::$app->request->referrer : null));

        }

        if (Yii::$app->request->isAjax) {
            return $this->asJson(['status' => 'error']);
        } else {
            Yii::$app->session->setFlash('error', 'Упс, щось пiшло не так=(t');
            return $this->goBack((!empty(Yii::$app->request->referrer) ? Yii::$app->request->referrer : null));
        }
    }

    public function actionMoreProduct($id)
    {

        $product = Products::findOne($id);

        $shoppingCart = ShoppingCart::findLastCart();
        if ($shoppingCart->isNewRecord) {
            return $this->redirect('/');

        }

        if ($product && $shoppingCart->moreQuantityToCart($product)) {

            Yii::$app->session->setFlash('success', '+1!');

            return $this->goBack((!empty(Yii::$app->request->referrer) ? Yii::$app->request->referrer : null));

        }
        if (Yii::$app->request->isAjax) {
            return $this->asJson(['status' => 'error']);
        } else {
            Yii::$app->session->setFlash('error', 'sorry, we can\'t add this product to your cart');
            return $this->goBack((!empty(Yii::$app->request->referrer) ? Yii::$app->request->referrer : null));
        }

    }

}

