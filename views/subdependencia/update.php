<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subdependencia */

$this->title = 'Update Subdependencia: ' . ' ' . $model->subdependencia_id;
$this->params['breadcrumbs'][] = ['label' => 'Subdependencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->subdependencia_id, 'url' => ['view', 'id' => $model->subdependencia_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subdependencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
