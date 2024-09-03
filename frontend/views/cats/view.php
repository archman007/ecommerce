<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\lk1 $model */

$this->title = $model->idlk1;
$this->params['breadcrumbs'][] = ['label' => 'Lk1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lk1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idlk1' => $model->idlk1], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idlk1' => $model->idlk1], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idlk1',
            'cat',
            'ddes:ntext',
        ],
    ]) ?>

</div>
