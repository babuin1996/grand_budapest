<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bookings */

$this->title = 'Создать бронирование';
$this->params['breadcrumbs'][] = ['label' => 'Бронирования', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bookings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
