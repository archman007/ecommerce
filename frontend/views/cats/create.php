<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\lk1 $model */

$this->title = 'Create Lk1';
$this->params['breadcrumbs'][] = ['label' => 'Lk1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lk1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
