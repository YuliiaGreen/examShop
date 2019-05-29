<?php

use yii\db\Migration;

/**
 * Class m190517_055637_table_news
 */
class m190517_055637_table_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(225)->notNull(),
            'body' => $this->text()->notNull(),
            'short_description' => $this->string(300),
            'image_id' => $this->integer(),

            'status' => $this->boolean()->defaultValue(0),
            'created_at' => $this->bigInteger()->defaultValue(time()),
            'updated_at' => $this->bigInteger(),
            'deleted_at' => $this->bigInteger(),
            'seo' => $this->integer()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190517_055637_table_news cannot be reverted.\n";

        return false;
    }
    */
}
