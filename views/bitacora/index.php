<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\BitacoraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bitacoras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bitacora-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bitacora', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bitacora_id',
            'fecha',
            'usuario_id',
            'accion_id',
            'datos_enviados:ntext',
            // 'HTTP_USER_AGENT:ntext',
            // 'HTTP_HOST',
            // 'SERVER_PORT',
            // 'REMOTE_ADDR',
            // 'REMOTE_PORT',
            // 'SERVER_PROTOCOL',
            // 'REQUEST_METHOD',
            // 'REQUEST_URI',
            // 'resultado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
