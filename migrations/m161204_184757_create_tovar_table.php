<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tovar`.
 */
class m161204_184757_create_tovar_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tovar', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tovar');
    }
}
