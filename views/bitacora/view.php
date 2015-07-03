<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bitacora */

$this->title = $model->bitacora_id;
$this->params['breadcrumbs'][] = ['label' => 'Bitacoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bitacora-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->bitacora_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->bitacora_id], [
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
            'bitacora_id',
            'fecha',
            'usuario_id',
            'accion_id',
            'datos_enviados:ntext',
            'HTTP_USER_AGENT:ntext',
            'HTTP_HOST',
            'SERVER_PORT',
            'REMOTE_ADDR',
            'REMOTE_PORT',
            'SERVER_PROTOCOL',
            'REQUEST_METHOD',
            'REQUEST_URI',
            'resultado',
        ],
    ]) ?>

</div>
