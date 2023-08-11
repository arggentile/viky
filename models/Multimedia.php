<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "multimedia".
 *
 * @property int $id
 * @property string|null $tipo_archivo
 * @property string|null $nombre_archivo
 * @property string|null $comentario
 */
class Multimedia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'multimedia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_archivo', 'nombre_archivo', 'comentario'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo_archivo' => 'Tipo Archivo',
            'nombre_archivo' => 'Nombre Archivo',
            'comentario' => 'Comentario',
        ];
    }
}
