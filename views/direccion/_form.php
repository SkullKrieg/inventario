<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Direccion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="direccion-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-6">

    <?= $form->field($model, 'direccion_nombre')->textInput(['maxlength' => true]) ?>
	</div>

    <div class="col-md-6">
			<?= $form->field($model, 'subdependencia_id')->widget(Select2::classname(),[
			    					'language' => 'es_MX',
			                        'data' => $subdependencias,
			                        
			                        'options' => ['placeholder' => 'Selecciona una subdependencia ...',],
			                        'pluginOptions' => [
			                            'allowClear' => true,
			                        ],
			  		]) ?>
	</div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
