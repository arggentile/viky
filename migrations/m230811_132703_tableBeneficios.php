<?php

use yii\db\Migration;

/**
 * Class m230811_132703_tableBeneficios
 */
class m230811_132703_tableBeneficios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{%beneficios}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
            'descripcion' => $this->string(),
            'activo' => $this->boolean(),   
            'id_multimedia' =>  $this->integer(),
        ]);
        
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
