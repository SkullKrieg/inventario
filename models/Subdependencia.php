<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subdependencia".
 *
 * @property integer $subdependencia_id
 * @property string $subdependencia_nombre
 * @property integer $dependencia_id
 *
 * @property Direccion[] $direccions
 * @property Dependencia $dependencia
 */
class Subdependencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subdependencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dependencia_id'], 'required'],
            [['dependencia_id'], 'integer'],
            [['subdependencia_nombre'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subdependencia_id' => 'Subdependencia ID',
            'subdependencia_nombre' => 'Subdependencia Nombre',
            'dependencia_id' => 'Dependencia',
            'dependenciaName' => 'Dependencia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDireccions()
    {
        return $this->hasMany(Direccion::className(), ['subdependencia_id' => 'subdependencia_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDependencia()
    {
        return $this->hasOne(Dependencia::className(), ['dependencia_id' => 'dependencia_id']);
    }

    public function getdependenciaName()
    {
        return isset($this->dependencia->dependencia_nombre)?$this->dependencia->dependencia_nombre:'';
    }
}
