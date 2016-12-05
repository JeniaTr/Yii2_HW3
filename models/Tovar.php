<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tovar".
 *
 * @property integer $id
 * @property string $name
 *
 * @property TovarOrder[] $tovarOrders
 */
class Tovar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tovar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTovarOrders()
    {
        return $this->hasMany(TovarOrder::className(), ['tovar_id' => 'id']);
    }
}
