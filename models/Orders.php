<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property integer $id
 * @property string $date
 * @property string $sum
 * @property string $coment
 * @property integer $buyer_id
 *
 * @property Buyer $buyer
 * @property TovarOrder[] $tovarOrders
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'sum', 'buyer_id'], 'required'],
            [['date'], 'safe'],
            [['sum', 'coment'], 'string'],
            [['buyer_id'], 'integer'],
            [['buyer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Buyer::className(), 'targetAttribute' => ['buyer_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'sum' => 'Sum',
            'coment' => 'Coment',
            'buyer_id' => 'Buyer ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuyer()
    {
        return $this->hasOne(Buyer::className(), ['id' => 'buyer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTovarOrders()
    {
        return $this->hasMany(TovarOrder::className(), ['order_id' => 'id']);
    }
}
