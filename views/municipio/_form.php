<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Municipio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="municipio-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-6">
			    <?= $form->field($model, 'zona_id')->widget(Select2::classname(),[
			    					'language' => 'es_MX',
			                        'data' => $zonas,
			                        
			                        'options' => ['placeholder' => 'Seleccionar Zona ...',],
			                        'pluginOptions' => [
			                            'allowClear' => true,
			                        ],
			    ]) ?>
	</div>

 	<div class="col-md-6">
    	<?= $form->field($model, 'municipio_nombre')->textInput() ?>
	</div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
