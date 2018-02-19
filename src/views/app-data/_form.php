<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AppData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'key')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'value')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput()->textInput(['disabled' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput()->textInput(['disabled' => true]) ?>

    <?= $form->field($model, 'deleted_at')->textInput()->textInput(['disabled' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
