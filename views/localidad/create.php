<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Localidad */

$this->title = 'Agregar Localidad';
$this->params['breadcrumbs'][] = ['label' => 'Localidad', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="localidad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'municipios' => $municipios,
    ]) ?>

</div>
