<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\DireccionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Direcciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direccion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Direccion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'direccion_id',
            'direccion_nombre',
            //'subdependencia_id',
            'subdependenciaName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
