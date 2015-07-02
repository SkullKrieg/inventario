<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "corporacion".
 *
 * @property integer $corporacion_id
 * @property string $corporacion_nombre
 */
class Corporacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'corporacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['corporacion_nombre'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'corporacion_id' => 'Corporacion ID',
            'corporacion_nombre' => 'Corporacion Nombre',
        ];
    }
}
