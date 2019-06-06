<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Categories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categories-form">

    <? //= var_dump($categories);?>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'parent_id')->dropDownList($categories, ['prompt' => '']) ?>
    <!---->
    <?= $form->field($model, 'image')->fileInput() ?>
    <?= $form->field($model, 'galery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'status')->dropDownList(['1' => 'ACTIVE', '0' => 'INACTIVE']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <!--    --><? //= '<pre>'; ?>
    <!--    --><?php //print_r($_FILES); ?>
    <!--    --><? //= '</pre>'; ?>

</div>
