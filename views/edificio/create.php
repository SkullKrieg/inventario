<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Edificio */

$this->title = 'Agregar Edificio';
$this->params['breadcrumbs'][] = ['label' => 'Edificio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="edificio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'localidades' => $localidades,
    ]) ?>

</div>
