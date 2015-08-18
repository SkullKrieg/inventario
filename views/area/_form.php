<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Area */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="area-form">

    <?php $form = ActiveForm::begin(); ?>
	<div class="col-md-6">

    <?= $form->field($model, 'area_nombre')->textInput(['maxlength' => true]) ?>
		</div>

	<div class="col-md-6">
			<?= $form->field($model, 'direccion_id')->widget(Select2::classname(),[
			    					'language' => 'es_MX',
			                        'data' => $direcciones,
			                        
			                        'options' => ['placeholder' => 'Selecciona una direccion ...',],
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
