<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Localidad */

$this->title = 'Actualizar Localidad: ' . ' ' . $model->localidad_nombre;
$this->params['breadcrumbs'][] = ['label' => 'Localidad', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->localidad_nombre, 'url' => ['view', 'id' => $model->localidad_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="localidad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'municipios' => $municipios,
    ]) ?>

</div>
