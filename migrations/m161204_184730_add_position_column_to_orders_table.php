<?php

use yii\db\Migration;

/**
 * Handles adding position to table `orders`.
 */
class m161204_184730_add_position_column_to_orders_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('orders', 'date', $this->date()->notNull());
        $this->addColumn('orders', 'sum', $this->text()->notNull());
        $this->addColumn('orders', 'coment', $this->text());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('orders', 'date');
        $this->dropColumn('orders', 'sum');
        $this->dropColumn('orders', 'coment');
    }
}
