<?php

use yii\db\Migration;

/**
 * Class m200717_041246_create_table_hotel_numbers
 */
class m200717_041246_create_table_hotel_numbers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('hotel_numbers', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->unique(),
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->$this->dropTable('hotel_numbers');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200717_041246_create_table_hotel_numbers cannot be reverted.\n";

        return false;
    }
    */
}
