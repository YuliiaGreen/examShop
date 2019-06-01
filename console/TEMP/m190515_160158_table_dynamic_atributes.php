<?php

use yii\db\Migration;

/**
 * Class m190515_160158_table_dynamic_attributes
 */
class m190515_160158_table_dynamic_attributes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%attributes}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'image_path' => $this->string(),
            'created_at' => $this->bigInteger(),
            'updated_at' => $this->bigInteger(),
            'deleted_at' => $this->bigInteger(),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%attributes}}');


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
