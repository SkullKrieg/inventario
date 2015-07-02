<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "puesto".
 *
 * @property integer $puesto_id
 * @property string $puesto_nombre
 * @property integer $corporacion_id
 * @property integer $area_id
 */
class Puesto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'puesto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['corporacion_id', 'area_id'], 'integer'],
            [['puesto_nombre'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'puesto_id' => 'Puesto ID',
            'puesto_nombre' => 'Puesto Nombre',
            'corporacion_id' => 'Corporacion ID',
            'area_id' => 'Area ID',
        ];
    }
}
