<?php

use yii\db\Migration;

/**
 * Handles adding position to table `tovar`.
 */
class m161204_184855_add_position_column_to_tovar_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('tovar', 'name', $this->text()->notNull());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('tovar', 'name');
    }
}
