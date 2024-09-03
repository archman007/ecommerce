<?php

use app\models\lk1;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Lk1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lk1-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lk1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idlk1',
            'cat',
            'ddes:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, lk1 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idlk1' => $model->idlk1]);
                 }
            ],
        ],
    ]); ?>


</div>
