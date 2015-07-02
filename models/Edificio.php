<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "edificio".
 *
 * @property integer $edificio_id
 * @property string $edificio_nombre
 * @property integer $localidad_id
 *
 * @property Localidad $localidad
 */
class Edificio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'edificio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['localidad_id'], 'required'],
            [['localidad_id'], 'integer'],
            [['edificio_nombre'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'edificio_id' => 'Edificio ID',
            'edificio_nombre' => 'Edificio Nombre',
            'localidad_id' => 'Localidad ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocalidad()
    {
        return $this->hasOne(Localidad::className(), ['localidad_id' => 'localidad_id']);
    }
}
