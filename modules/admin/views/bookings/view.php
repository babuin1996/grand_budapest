<?php

use app\models\HotelNumbers;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bookings */

$this->title = 'Бронирование №'.$model->id;
$this->params['breadcrumbs'][] = [
    'label' => 'Админка',
    'url' => '/admin',
];
$this->params['breadcrumbs'][] = ['label' => 'Бронирования', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bookings-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Отменить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Отменить бронирование?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Номер',
                'format' => 'raw',
                'value' => function ($model) {
                    $number = HotelNumbers::findOne($model['hotel_number_id']);

                    return '<a href="'.Url::toRoute(['/admin/hotel-numbers/view', 'id' => $number->id]).'">'.$number->name.'</a>';
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
        ],
    ]) ?>

</div>
