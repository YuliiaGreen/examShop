<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 17.05.2019
 * Time: 14:00
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use common\models\SexTrait;
?>

<div class="row">
    <div class="col-lg-5 m-auto">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        <?= $form->field($model, 'surname')->textInput(['autofocus' => true])->label("Прізвище") ?>
        <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label("Ім'я") ?>
        <?= $form->field($model, 'fathersname')->textInput(['autofocus' => true])->label("По-батькові") ?>
        <?= $form->field($model, 'email')->textInput(['autofocus' => true])->label("Електронна пошта") ?>
        <!--        --><? //= $form->field($model, 'sex')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'sex')->dropDownList(['male' => 'Male', 'female' => 'Female', 'underfined' => 'Underfined',], ['prompt' => ''])->label("Стать") ?>
        <?= $form->field($model, 'dateOfBirth')->textInput(['autofocus' => true])->label("Дата народження") ?>
        <?= $form->field($model, 'phoneNomber')->textInput(['autofocus' => true])->label("Номер телефону") ?>
        <?= $form->field($model, 'city')->textInput(['autofocus' => true])->label("Місто") ?>


        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>