<?php

use yii\db\Migration;

/**
 * Class m200717_042215_add_admin_user
 */
class m200717_042215_add_admin_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('users', [
            'login' => 'hotel_admin',
            'password_hash' => Yii::$app->security->generatePasswordHash('admin_password_1092873654'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200717_042215_add_admin_user cannot be reverted.\n";

        return false;
    }
    */
}
