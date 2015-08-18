<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Direccion */

$this->title = $model->direccion_id;
$this->params['breadcrumbs'][] = ['label' => 'Direccion', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direccion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->direccion_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->direccion_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Seguro que quieres eliminar este objeto?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'direccion_id',
            'direccion_nombre',
        //    'subdependencia_id',
            'subdependenciaName',
        ],
    ]) ?>

</div>
