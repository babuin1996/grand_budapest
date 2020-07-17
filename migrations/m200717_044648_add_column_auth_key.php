<?php

use yii\db\Migration;

/**
 * Class m200717_044648_add_column_auth_key
 */
class m200717_044648_add_column_auth_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('users', 'auth_key', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('users', 'auth_key');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200717_044648_add_column_auth_key cannot be reverted.\n";

        return false;
    }
    */
}
