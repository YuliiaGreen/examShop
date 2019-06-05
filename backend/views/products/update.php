<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $dropdownData - список категорій app\models\Products */
/* @var $statusList - '1' => 'Active', '0' => 'Inactive', '2' => 'Deleted' app\models\Products */

$this->title = 'Update Products: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="products-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="products-form">
        <?= $this->render('_form', [
            'model' => $model,
            'dropdownData' => $dropdownData,
            'statusList' => $statusList,

        ]) ?>

        <!--        --><?php //$form = ActiveForm::begin(); ?>
        <!---->
        <!--        --><? //= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        <!---->
        <!--        <!--   випадаючий список-->-->
        <!--        --><? //= $form->field($model, 'selected_categories')->dropDownList($dropdownData, ['multiple' => 'multiple']) ?>
        <!--        <!--    /випадаючий список-->-->
        <!---->
        <!--        --><? //= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
        <!---->
        <!--        --><? //= $form->field($model, 'price')->textInput() ?>
        <!---->
        <!--        --><? //= $form->field($model, 'image_id')->textInput() ?>
        <!---->
        <!--        <!--    -->--><? // //= $form->field($model, 'status')->textInput() ?>
        <!--        --><? //= $form->field($model, 'status')->dropDownList($statusList) ?>
        <!---->
        <!--        <!--    -->--><? // //= $form->field($model, 'created_at')->textInput() ?>
        <!--        <!---->-->
        <!--        <!--    -->--><? // //= $form->field($model, 'updated_at')->textInput() ?>
        <!--        <!---->-->
        <!--        <!--    -->--><? // //= $form->field($model, 'deleted_at')->textInput() ?>
        <!---->
        <!--        <div class="form-group">-->
        <!--            --><? //= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <!--        </div>-->
        <!---->
        <!--        --><?php //ActiveForm::end(); ?>

    </div>
    <!--    --><? //= $this->render('_form', [
    //        'model' => $model,
    //        'dropdownData' => $dropdownData,
    //        'statusList' => $statusList
    //    ]) ?>

</div>
