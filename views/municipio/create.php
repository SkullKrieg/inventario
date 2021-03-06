<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Municipio */

$this->title = 'Agregar Municipio';
$this->params['breadcrumbs'][] = ['label' => 'Municipio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="municipio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'zonas' => $zonas,
    ]) ?>

</div>
