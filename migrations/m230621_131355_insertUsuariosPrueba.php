<?php

use yii\db\Migration;

/**
 * Class m230621_131355_insertUsuariosPrueba
 */
class m230621_131355_insertUsuariosPrueba extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $query = file_get_contents(dirname(__FILE__).'/'.get_class($this).".sql");
        $this->db->pdo->exec($query);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230621_131355_insertUsuariosPrueba cannot be reverted.\n";

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
