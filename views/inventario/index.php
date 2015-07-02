<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\UsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventario-index">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usuario_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departamento_id')->textInput() ?>

    <?= $form->field($model, 'corporacion_id')->textInput() ?>

    <?= $form->field($model, 'puesto_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>