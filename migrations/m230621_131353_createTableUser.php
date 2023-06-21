<?php

use yii\db\Migration;

/**
 * Class m230621_131353_createTableUser
 */
class m230621_131353_createTableUser extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->createTable('{{%usuarios}}', [
        'id' => $this->primaryKey(),
        'name' => $this->string()->unique(),
        'password' => $this->string()->unique(),
        'documento' => $this->string()->unique()
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
