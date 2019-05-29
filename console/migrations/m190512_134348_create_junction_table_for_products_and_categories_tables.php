<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products_categories}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%products}}`
 * - `{{%categories}}`
 */
class m190512_134348_create_junction_table_for_products_and_categories_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products_categories}}', [
            'products_id' => $this->integer(),
            'categories_id' => $this->integer(),
            'PRIMARY KEY(products_id, categories_id)',
            //композитний ключ визначаэться кількома полями
        ]);

        // creates index for column `products_id`
        $this->createIndex(
            '{{%idx-products_categories-products_id}}',
            '{{%products_categories}}',
            'products_id'
        );

        // add foreign key for table `{{%products}}`
        $this->addForeignKey(
            '{{%fk-products_categories-products_id}}',
            '{{%products_categories}}',
            'products_id',
            '{{%products}}',
            'id',
            'CASCADE'
        );

        // creates index for column `categories_id`
        $this->createIndex(
            '{{%idx-products_categories-categories_id}}',
            '{{%products_categories}}',
            'categories_id'
        );

        // add foreign key for table `{{%categories}}`
        $this->addForeignKey(
            '{{%fk-products_categories-categories_id}}',
            '{{%products_categories}}',
            'categories_id',
            '{{%categories}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%products}}`
        $this->dropForeignKey(
            '{{%fk-products_categories-products_id}}',
            '{{%products_categories}}'
        );

        // drops index for column `products_id`
        $this->dropIndex(
            '{{%idx-products_categories-products_id}}',
            '{{%products_categories}}'
        );

        // drops foreign key for table `{{%categories}}`
        $this->dropForeignKey(
            '{{%fk-products_categories-categories_id}}',
            '{{%products_categories}}'
        );

        // drops index for column `categories_id`
        $this->dropIndex(
            '{{%idx-products_categories-categories_id}}',
            '{{%products_categories}}'
        );

        $this->dropTable('{{%products_categories}}');
    }
}
