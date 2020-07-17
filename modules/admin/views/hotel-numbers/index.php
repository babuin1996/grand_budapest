<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Номера';
$this->params['breadcrumbs'][] = [
    'label' => 'Админка',
    'url' => '/admin',
];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hotel-numbers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить номер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'description:ntext',
            [
                'label' => 'Забронировано в',
                'value' => function ($model) {
                    return date('d-m-Y H:i:s', $model['booked_at']);
                }
            ],
        ],
    ]); ?>


</div>