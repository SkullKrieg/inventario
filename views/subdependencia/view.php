<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Subdependencia */

$this->title = $model->subdependencia_id;
$this->params['breadcrumbs'][] = ['label' => 'Subdependencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subdependencia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->subdependencia_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->subdependencia_id], [
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
            'subdependencia_id',
            'subdependencia_nombre',
            'dependencia_id',
        ],
    ]) ?>

</div>
