<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Localidad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="localidad-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-6">
    	<?= $form->field($model, 'localidad_nombre')->textInput(['maxlength' => true]) ?>
	</div>
    <div class="col-md-6">
			    <?= $form->field($model, 'municipio_id')->widget(Select2::classname(),[
			    					'language' => 'es_MX',
			                        'data' => $municipios,
			                        
			                        'options' => ['placeholder' => 'Selecciona un municipio ...',],
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
