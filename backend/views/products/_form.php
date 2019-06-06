<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
/* @var $dropdownData yii\widgets\ActiveForm */
/* @var $statusList yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <!--   випадаючий список-->
    <?= $form->field($model, 'selected_categories')->dropDownList($dropdownData, ['multiple' => 'multiple']) ?>
    <!--    /випадаючий список-->

    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'image')->fileInput() ?>
    <!--    --><? //= $form->field($model, 'galery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <!--    --><? //= $form->field($model, 'status')->textInput() ?>
    <?= $form->field($model, 'status')->dropDownList($statusList) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
