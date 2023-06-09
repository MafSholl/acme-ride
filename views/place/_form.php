<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Place $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="place-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'place_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_country')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
