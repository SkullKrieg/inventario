<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "municipio".
 *
 * @property integer $municipio_id
 * @property string $municipio_nombre
 * @property integer $zona_id
 *
 * @property Localidad[] $localidads
 * @property Zona $zona
 */
class Municipio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'municipio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zona_id'], 'required'],
            [['zona_id'], 'integer'],
            [['municipio_nombre'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'municipio_id' => 'Municipio ID',
            'municipio_nombre' => 'Municipio Nombre',
            'zona_id' => 'Zona ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocalidads()
    {
        return $this->hasMany(Localidad::className(), ['municipio_id' => 'municipio_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZona()
    {
        return $this->hasOne(Zona::className(), ['zona_id' => 'zona_id']);
    }
}
