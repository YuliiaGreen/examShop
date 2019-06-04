<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $statusList common\models\Products */
/* @var $dropdownData common\models\Products */
/* @var $attributesData common\models\AttributesValues */


$this->title = 'Create Products';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="products-form">


        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <!--   випадаючий список-->
        <?= $form->field($model, 'selected_categories')->dropDownList($dropdownData, ['multiple' => 'multiple']) ?>
        <!--    /випадаючий список-->

        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'price')->textInput() ?>

        <?= $form->field($model, 'image_id')->textInput() ?>

        <?= $form->field($model, 'status')->dropDownList($statusList) ?>

        <!--        <div class="dynamic-attributes">-->
        <!--            <div class="add-attributes border">+</div>-->
        <!--            --><?php
        //            $attributesDDList = \yii\helpers\ArrayHelper::map($attributesData, 'id', 'title');
        //            $attributesValuesDDList = \yii\helpers\ArrayHelper::map($attributesData[0]->attributesValues, 'id', 'title');
        //            $resultJs = [];
        //            foreach ($attributesData as $key => $attribute):?>
        <!---->
        <!--                --><?php //$resultJs[$attribute->id]['id'] = $attribute->id ?>
        <!--                --><?php //$resultJs[$attribute->id]['title'] = $attribute->title ?>
        <!--                --><?php //foreach ($attribute->attributesValues as $attributesValuesId => $value): ?>
        <!--                    --><? //= $resultJs[$attribute->id]['attributesValues'][$value->id]['id'] = $value->id ?>
        <!--                    --><? //= $resultJs[$attribute->id]['attributesValues'][$value->id]['title'] = $value->title ?>
        <!--                --><?php //endforeach ?>
        <!--            --><?php //endforeach; ?>
        <!--            <div class="single-attribute">-->
        <!--                --><? //= $form->field($model, 'attribute')->dropDownList($attributesDDList, ['class' => ['col-md-4','ddlist']])->label('') ?>
        <!--                --><? //= $form->field($model, 'attributes_value')->dropDownList($attributesValuesDDList, ['class' => 'col-md-4'])->label('') ?>
        <!--            </div>-->
        <!--        </div>-->

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>


</div>
<!--<script>-->
<!--    var a = --><? //= json_encode($resultJs)?><!--;-->
<!---->
<!---->
<!--        console.log(a);-->
<!--// </script>-->
