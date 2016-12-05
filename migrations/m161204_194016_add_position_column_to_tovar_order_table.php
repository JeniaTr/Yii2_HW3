<?php

use yii\db\Migration;

/**
 * Handles adding position to table `tovar_order`.
 * Has foreign keys to the tables:
 *
 * - `orders`
 * - `tovar`
 */
class m161204_194016_add_position_column_to_tovar_order_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('tovar_order', 'order_id', $this->integer()->notNull());
        $this->addColumn('tovar_order', 'tovar_id', $this->integer()->notNull());

        // creates index for column `order_id`
        $this->createIndex(
            'idx-tovar_order-order_id',
            'tovar_order',
            'order_id'
        );

        // add foreign key for table `orders`
        $this->addForeignKey(
            'fk-tovar_order-order_id',
            'tovar_order',
            'order_id',
            'orders',
            'id',
            'CASCADE'
        );

        // creates index for column `tovar_id`
        $this->createIndex(
            'idx-tovar_order-tovar_id',
            'tovar_order',
            'tovar_id'
        );

        // add foreign key for table `tovar`
        $this->addForeignKey(
            'fk-tovar_order-tovar_id',
            'tovar_order',
            'tovar_id',
            'tovar',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `orders`
        $this->dropForeignKey(
            'fk-tovar_order-order_id',
            'tovar_order'
        );

        // drops index for column `order_id`
        $this->dropIndex(
            'idx-tovar_order-order_id',
            'tovar_order'
        );

        // drops foreign key for table `tovar`
        $this->dropForeignKey(
            'fk-tovar_order-tovar_id',
            'tovar_order'
        );

        // drops index for column `tovar_id`
        $this->dropIndex(
            'idx-tovar_order-tovar_id',
            'tovar_order'
        );

        $this->dropColumn('tovar_order', 'order_id');
        $this->dropColumn('tovar_order', 'tovar_id');
    }
}
