<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dependencia */

$this->title = 'Actualizar Dependencia: ' . ' ' . $model->dependencia_nombre;
$this->params['breadcrumbs'][] = ['label' => 'Dependencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dependencia_nombre, 'url' => ['view', 'id' => $model->dependencia_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="dependencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
