<?php

use yii\db\Migration;

/**
 * Class m190515_160158_table_dynamic_atributes
 */
class m190515_160158_table_dynamic_attributes extends Migration
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
        echo "m190515_160158_table_dynamic_attributes cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190515_160158_table_dynamic_atributes cannot be reverted.\n";

        return false;
    }
    */
}
