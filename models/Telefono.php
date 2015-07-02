<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telefono".
 *
 * @property integer $telefono_id
 * @property string $telefono_modelo
 * @property string $telefono_marca
 * @property string $telefono_extension
 * @property integer $jefe_id
 * @property integer $usuario_id
 * @property string $descripcion
 */
class Telefono extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'telefono';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jefe_id', 'usuario_id'], 'integer'],
            [['telefono_modelo', 'telefono_marca', 'telefono_extension'], 'string', 'max' => 45],
            [['descripcion'], 'string', 'max' => 445]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'telefono_id' => 'Telefono ID',
            'telefono_modelo' => 'Telefono Modelo',
            'telefono_marca' => 'Telefono Marca',
            'telefono_extension' => 'Telefono Extension',
            'jefe_id' => 'Jefe ID',
            'usuario_id' => 'Usuario ID',
            'descripcion' => 'Descripcion',
        ];
    }
}
