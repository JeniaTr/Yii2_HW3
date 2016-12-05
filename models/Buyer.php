<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buyer".
 *
 * @property integer $id
 * @property string $fio
 * @property string $adress
 * @property integer $telefon
 *
 * @property Orders[] $orders
 */
class Buyer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'buyer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fio'], 'required'],
            [['fio', 'adress'], 'string'],
            [['telefon'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'adress' => 'Adress',
            'telefon' => 'Telefon',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['buyer_id' => 'id']);
    }
}
