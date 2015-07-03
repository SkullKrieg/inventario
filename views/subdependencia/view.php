<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Subdependencia */

$this->title = $model->subdependencia_nombre;
$this->params['breadcrumbs'][] = ['label' => 'Subdependencia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subdependencia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->subdependencia_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->subdependencia_id], [
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
            'subdependencia_id',
            'subdependencia_nombre',
            'dependencia_id',
        ],
    ]) ?>

</div>
