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
 * @property int|null $imagen
 */
class Beneficios extends \yii\db\ActiveRecord
{
    
    public $file;
    public $fileimagen;
    
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
            [['activo', 'id_multimedia', 'imagen'], 'integer'],
            [['file', 'fileimagen'], 'required'],
            
            [['nombre', 'descripcion'], 'string', 'max' => 255],
             [['file'], 'file', 'checkExtensionByMimeType'=>false, 'maxFiles' => 1],
            [['imagen'], 'file', 'checkExtensionByMimeType'=>false, 'maxFiles' => 1],
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
            'imagen' => 'Imagen',
        ];
    }
    
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArchivo()
    {
        return $this->hasOne(\app\models\Multimedia::class, ['id' => 'id_multimedia']);
    }

    
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArchivoImagen()
    {
        return $this->hasOne(\app\models\Multimedia::class, ['id' => 'imagen']);
    }

}
