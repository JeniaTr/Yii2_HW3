<?php

use yii\db\Migration;

/**
 * Handles adding position to table `buyer`.
 */
class m161204_190849_add_position_column_to_buyer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('buyer', 'fio', $this->text()->notNull());
        $this->addColumn('buyer', 'adress', $this->text());
        $this->addColumn('buyer', 'telefon', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('buyer', 'fio');
        $this->dropColumn('buyer', 'adress');
        $this->dropColumn('buyer', 'telefon');
    }
}
