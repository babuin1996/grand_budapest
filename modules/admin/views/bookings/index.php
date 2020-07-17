<?php

use app\models\HotelNumbers;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Бронирования';
$this->params['breadcrumbs'][] = [
    'label' => 'Админка',
    'url' => '/admin',
];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bookings-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать бронирование', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => 'Номер',
                'value' => function ($model) {
                    return HotelNumbers::findOne($model['hotel_number_id'])->name;
                }
            ],
            'customer_name',
            'customer_phone',
            'booking_date',
            [
                'label' => 'Забронировано в',
                'value' => function ($model) {
                    return date('d-m-Y H:i:s', $model['booked_at']);
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
