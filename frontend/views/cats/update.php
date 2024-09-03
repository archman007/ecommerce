<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\lk1 $model */

$this->title = 'Update Lk1: ' . $model->idlk1;
$this->params['breadcrumbs'][] = ['label' => 'Lk1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idlk1, 'url' => ['view', 'idlk1' => $model->idlk1]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lk1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
