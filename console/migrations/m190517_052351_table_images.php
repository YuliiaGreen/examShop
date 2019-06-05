<?php

use yii\db\Migration;

/**
 * Class m190517_052351_table_images
 */
class m190517_052351_table_images extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%images}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(225)->notNull(),
            'path' => $this->text()->notNull(),
            'alt' => $this->string(300),
            'seo' => $this->integer()]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%images}}');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190517_052351_table_images cannot be reverted.\n";

        return false;
    }
    */
}
