<?php

/* @var $this yii\web\View */

use app\models\HotelNumbers;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'My Yii Application';
$has_booking_date = Yii::$app->request->get('booking_date');
$success_msg = Yii::$app->request->get('success_msg');
?>
<div class="site-index">
<?php if (!$success_msg) : ?>
    <?= Html::beginForm('/site/index', 'GET', ['id' => 'date_form', 'onchange' => 'submit()']) ?>
    <div class="col-md-8">
        <h4>
            Выберите дату, на которую хотите забронировать номер
        </h4>
        <?= \yii\jui\DatePicker::widget([
                'name' => 'booking_date',
                'value' => $has_booking_date,
                'language' => 'ru',
                'dateFormat' => 'yyyy-MM-dd',
        ]) ?>
    </div>
    <?= Html::endForm() ?>

    <?php if ($has_booking_date) : ?>
        <p style="padding-top: 80px;">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'name',
                    'description:ntext',
                    [
                        'label' => 'Действия',
                        'format' => 'raw',
                        'value' => function ($model) {
                            $booking_date = Yii::$app->request->get('booking_date');

                            return '<a class="btn btn-primary" href="'.Url::toRoute(['/site/book-number', 'number_id' => $model->id, 'booking_date' => $booking_date]).'">Забронировать</a>';
                        }
                    ],
                ],
            ]); ?>
        </p>
    <?php endif; ?>
<?php else : ?>
    <h4>
        Номер успешно забронирован!
    </h4>
<?php endif; ?>
</div>
