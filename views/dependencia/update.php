<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dependencia */

$this->title = 'Update Dependencia: ' . ' ' . $model->dependencia_id;
$this->params['breadcrumbs'][] = ['label' => 'Dependencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dependencia_id, 'url' => ['view', 'id' => $model->dependencia_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dependencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
