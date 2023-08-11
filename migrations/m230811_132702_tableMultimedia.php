<?php

use yii\db\Migration;

/**
 * Class m230811_132702_tableMultimedia
 */
class m230811_132702_tableMultimedia extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{%multimedia}}', [
            'id' => $this->primaryKey(),
            'tipo_archivo' => $this->string(),
            'nombre_archivo' => $this->string(),
            'comentario' => $this->string(),            
        ]);
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230811_132702_tableMultimedia cannot be reverted.\n";

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
