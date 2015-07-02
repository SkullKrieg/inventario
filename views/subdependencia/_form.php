<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subdependencia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subdependencia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subdependencia_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dependencia_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
