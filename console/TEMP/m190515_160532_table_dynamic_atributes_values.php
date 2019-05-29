<?php

use yii\db\Migration;

/**
 * Class m190515_160532_table_dynamic_atributes_values
 */
class m190515_160532_table_dynamic_attributes_values extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{%attributes}', []);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190515_160532_table_dynamic_attributes_values cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190515_160532_table_dynamic_atributes_values cannot be reverted.\n";

        return false;
    }
    */
}
