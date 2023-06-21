<?php

use yii\db\Migration;

/**
 * Class m230621_131353_createTableUser
 */
class m230621_131553_createTableUserss extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(45)->unique(),
            'password' => $this->string(45)->unique(),
            'auth_key' => $this->string(32)->unique(),
            'password_reset_token' => $this->string(45)->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230621_131353_createTableUser cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230621_131353_createTableUser cannot be reverted.\n";

        return false;
    }
    */
}
