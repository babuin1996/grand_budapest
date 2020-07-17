<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HotelNumbers */

$this->title = 'Добавление';
$this->params['breadcrumbs']['homeLink'] = [
    'label' => 'Админка',
    'url' => '/admin',
];
$this->params['breadcrumbs'][] = ['label' => 'Номера', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hotel-numbers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
