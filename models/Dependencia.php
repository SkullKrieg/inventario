<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dependencia".
 *
 * @property integer $dependencia_id
 * @property string $dependencia_nombre
 */
class Dependencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dependencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dependencia_nombre'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dependencia_id' => 'Dependencia ID',
            'dependencia_nombre' => 'Dependencia Nombre',
        ];
    }
}
