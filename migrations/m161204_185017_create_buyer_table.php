<?php

use yii\db\Migration;

/**
 * Handles the creation of table `buyer`.
 */
class m161204_185017_create_buyer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('buyer', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('buyer');
    }
}
