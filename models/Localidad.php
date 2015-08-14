<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "localidad".
 *
 * @property integer $localidad_id
 * @property string $localidad_nombre
 * @property integer $municipio_id
 *
 * @property Edificio[] $edificios
 * @property Municipio $municipio
 */
class Localidad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'localidad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['municipio_id'], 'required'],
            [['municipio_id'], 'integer'],
            [['localidad_nombre'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'localidad_id' => 'Localidad ID',
            'localidad_nombre' => 'Localidad Nombre',
            'municipio_id' => 'Municipio ID',
            'municipioName' => 'Municipio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEdificios()
    {
        return $this->hasMany(Edificio::className(), ['localidad_id' => 'localidad_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicipio()
    {
        return $this->hasOne(Municipio::className(), ['municipio_id' => 'municipio_id']);
    }

    public function getmunicipioName()
    {
        return isset($this->municipio->municipio_nombre)?$this->municipio->municipio_nombre:'';
    }
}
