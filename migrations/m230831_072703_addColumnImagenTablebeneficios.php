<?php

use yii\db\Migration;

/**
 * Class m230811_132703_tableBeneficios
 */
class m230831_072703_addColumnImagenTablebeneficios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addColumn('{{%beneficios}}', 'imagen',  $this->integer());
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230811_132703_tableBeneficios cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230811_132703_tableBeneficios cannot be reverted.\n";

        return false;
    }
    */
}
