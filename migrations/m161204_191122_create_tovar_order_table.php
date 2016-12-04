<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tovar_order`.
 */
class m161204_191122_create_tovar_order_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tovar_order', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tovar_order');
    }
}
