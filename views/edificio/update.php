<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Edificio */

$this->title = 'Actualizar Edificio: ' . ' ' . $model->edificio_id;
$this->params['breadcrumbs'][] = ['label' => 'Edificio', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->edificio_nombre, 'url' => ['view', 'id' => $model->edificio_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="edificio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
