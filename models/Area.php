<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "area".
 *
 * @property integer $area_id
 * @property string $area_nombre
 * @property integer $direccion_id
 *
 * @property Direccion $direccion
 */
class Area extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'area';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['direccion_id'], 'required'],
            [['direccion_id'], 'integer'],
            [['area_nombre'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'area_id' => 'Area ID',
            'area_nombre' => 'Area Nombre',
            'direccion_id' => 'Direccion',
            'direccionName' => 'Direccion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDireccion()
    {
        return $this->hasOne(Direccion::className(), ['direccion_id' => 'direccion_id']);
    }

    public function getdireccionName()
    {
        return isset($this->direccion->direccion_nombre)?$this->direccion->direccion_nombre:'';
    }
}
