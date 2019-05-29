<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
<?php //$form = ActiveForm::begin(); ?>
<!---->
<? //= $form->field($model, 'rfgw')->textInput() ?>
<!---->
<!--<div class="form-group">-->
<!--    --><? //= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
<!--</div>-->
<!---->
<?php //ActiveForm::end(); ?>
<form action="<?= \yii\helpers\Url::to('/site/search') ?>">
    <input type="text" name="param">
    <input type="submit">
</form>