<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Subdependencia */

$this->title = 'Create Subdependencia';
$this->params['breadcrumbs'][] = ['label' => 'Subdependencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subdependencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
