<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Zona */

$this->title = 'Actualizar Zona: ' . ' ' . $model->zona_nombre;
$this->params['breadcrumbs'][] = ['label' => 'Zonas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->zona_nombre, 'url' => ['view', 'id' => $model->zona_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="zona-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
