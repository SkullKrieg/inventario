<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Edificio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="edificio-form">

    <?php $form = ActiveForm::begin(); ?>
    	<div class="col-md-6">
    		<?= $form->field($model, 'edificio_nombre')->textInput(['maxlength' => true]) ?>
		</div>

     	<div class="col-md-6">
			<?= $form->field($model, 'localidad_id')->widget(Select2::classname(),[
			    					'language' => 'es_MX',
			                        'data' => $localidades,
			                        
			                        'options' => ['placeholder' => 'Selecciona una localidad ...',],
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
