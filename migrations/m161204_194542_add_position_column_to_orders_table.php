<?php

use yii\db\Migration;

/**
 * Handles adding position to table `orders`.
 * Has foreign keys to the tables:
 *
 * - `buyer`
 */
class m161204_194542_add_position_column_to_orders_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('orders', 'buyer_id', $this->integer()->notNull());

        // creates index for column `buyer_id`
        $this->createIndex(
            'idx-orders-buyer_id',
            'orders',
            'buyer_id'
        );

        // add foreign key for table `buyer`
        $this->addForeignKey(
            'fk-orders-buyer_id',
            'orders',
            'buyer_id',
            'buyer',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `buyer`
        $this->dropForeignKey(
            'fk-orders-buyer_id',
            'orders'
        );

        // drops index for column `buyer_id`
        $this->dropIndex(
            'idx-orders-buyer_id',
            'orders'
        );

        $this->dropColumn('orders', 'buyer_id');
    }
}
