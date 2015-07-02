<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Localidad */

$this->title = $model->localidad_id;
$this->params['breadcrumbs'][] = ['label' => 'Localidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="localidad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->localidad_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->localidad_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'localidad_id',
            'localidad_nombre',
            'municipio_id',
        ],
    ]) ?>

</div>
