<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\lk1 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="lk1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idlk1')->textInput() ?>

    <?= $form->field($model, 'cat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ddes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
