<?php

use yii\helpers\Html;

echo "Додавати товари до корзини можуть лише зареєстровані користувачі" . "<br>";
echo Html::a('Увійдіть ', '/site/login');
echo 'або';
echo Html::a(' Зареєструйтесь', '/site/signup');