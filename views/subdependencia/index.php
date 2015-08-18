<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\SubdependenciaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subdependencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subdependencia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Subdependencia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'subdependencia_id',
            'subdependencia_nombre',
            //'dependencia_id',
            'dependenciaName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
