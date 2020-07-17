<?php
use yii\helpers\Url;

$this->title = 'Добавление';
$this->params['breadcrumbs']['homeLink'] = [
    'label' => 'Админка',
    'url' => '/admin',
];
?>
<p>
    <div class="admin-default-index">
        <a href="<?=Url::to('/admin/hotel-numbers')?>" class="btn btn-primary">
            Номера
        </a>
    </div>
</p>
<p>
    <div class="admin-default-index">
        <a href="<?=Url::to('/admin/bookings')?>" class="btn btn-success">
            Бронирования
        </a>
    </div>
</p>
