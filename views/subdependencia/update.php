<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subdependencia */

$this->title = 'Actualizar Subdependencia: ' . ' ' . $model->subdependencia_nombre;
$this->params['breadcrumbs'][] = ['label' => 'Subdependencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->subdependencia_nombre, 'url' => ['view', 'id' => $model->subdependencia_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="subdependencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'dependencias' => $dependencias,
    ]) ?>

</div>
