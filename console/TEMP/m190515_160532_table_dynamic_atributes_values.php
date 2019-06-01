<?php

use yii\db\Migration;

/**
 * Class m190515_160532_table_dynamic_attributes_values
 */
class m190515_160532_table_dynamic_attributes_values extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{%attributes_value}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'attributes_id' => $this->integer(),
            'created_at' => $this->bigInteger(),
            'updated_at' => $this->bigInteger(),
            'deleted_at' => $this->bigInteger(),
        ]);

        $this->createIndex('idx-attributes_value-attributes_id', 'attributes_value', 'attributes_id');
        $this->addForeignKey('fk-attributes_value-attributes_id', 'attributes_value', 'attributes_id',
            'attributes', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%attributes_value}}');

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
