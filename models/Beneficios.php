<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "beneficios".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $descripcion
 * @property int|null $activo
 * @property int|null $id_multimedia
 */
class Beneficios extends \yii\db\ActiveRecord
{
    
    public $file;
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'beneficios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activo', 'id_multimedia'], 'integer'],
            [['nombre', 'descripcion'], 'string', 'max' => 255],
            [['file'], 'file', 'checkExtensionByMimeType'=>false, 'maxFiles' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'activo' => 'Activo',
            'id_multimedia' => 'Id Multimedia',
        ];
    }
}
