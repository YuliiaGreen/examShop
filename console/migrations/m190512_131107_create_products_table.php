<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m190512_131107_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(225)->notNull(),
            'body' => $this->text()->notNull(),
            'price' => $this->integer()->notNull(),
//            'category'=>$this->integer()->notNull(),
            'image_id' => $this->integer(),

            'status' => $this->boolean()->defaultValue(0),
            'created_at' => $this->bigInteger()->defaultValue(time()),
            'updated_at' => $this->bigInteger(),
            'deleted_at' => $this->bigInteger(),
            'seo' => $this->integer(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
