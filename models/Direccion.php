<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "direccion".
 *
 * @property integer $direccion_id
 * @property string $direccion_nombre
 * @property integer $subdependencia_id
 *
 * @property Area[] $areas
 * @property Subdependencia $subdependencia
 */
class Direccion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'direccion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subdependencia_id'], 'required'],
            [['subdependencia_id'], 'integer'],
            [['direccion_nombre'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'direccion_id' => 'Direccion ID',
            'direccion_nombre' => 'Direccion Nombre',
            'subdependencia_id' => 'Subdependencia',
            'subdependenciaName' => 'Subdependencia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAreas()
    {
        return $this->hasMany(Area::className(), ['direccion_id' => 'direccion_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubdependencia()
    {
        return $this->hasOne(Subdependencia::className(), ['subdependencia_id' => 'subdependencia_id']);
    }

    public function getsubdependenciaName()
    {
        return isset($this->subdependencia->subdependencia_nombre)?$this->subdependencia->subdependencia_nombre:'';
    }
}
