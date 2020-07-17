<?php

use yii\db\Migration;

/**
 * Class m200717_041306_create_table_hotel_bookings
 */
class m200717_041306_create_table_hotel_bookings extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('bookings', [
            'id' => $this->primaryKey(),
            'hotel_number_id' => $this->integer(),
            'customer_name' => $this->string(255),
            'customer_phone' => $this->string(255),
            'booking_date' => $this->date(),
            'booked_at' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('bookings');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200717_041306_create_table_hotel_bookings cannot be reverted.\n";

        return false;
    }
    */
}
