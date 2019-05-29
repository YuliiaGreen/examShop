<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products_shopping_cart}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%products}}`
 * - `{{%shopping_cart}}`
 */
class m190519_173912_create_junction_table_for_products_and_shopping_cart_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products_shopping_cart}}', [
            'products_id' => $this->integer(),
            'shopping_cart_id' => $this->integer(),
            'quantity' => $this->integer(),
            'PRIMARY KEY(products_id, shopping_cart_id)',
        ]);

        // creates index for column `products_id`
        $this->createIndex(
            '{{%idx-products_shopping_cart-products_id}}',
            '{{%products_shopping_cart}}',
            'products_id'
        );

        // add foreign key for table `{{%products}}`
        $this->addForeignKey(
            '{{%fk-products_shopping_cart-products_id}}',
            '{{%products_shopping_cart}}',
            'products_id',
            '{{%products}}',
            'id',
            'CASCADE'
        );

        // creates index for column `shopping_cart_id`
        $this->createIndex(
            '{{%idx-products_shopping_cart-shopping_cart_id}}',
            '{{%products_shopping_cart}}',
            'shopping_cart_id'
        );

        // add foreign key for table `{{%shopping_cart}}`
        $this->addForeignKey(
            '{{%fk-products_shopping_cart-shopping_cart_id}}',
            '{{%products_shopping_cart}}',
            'shopping_cart_id',
            '{{%shopping_cart}}',
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
            '{{%fk-products_shopping_cart-products_id}}',
            '{{%products_shopping_cart}}'
        );

        // drops index for column `products_id`
        $this->dropIndex(
            '{{%idx-products_shopping_cart-products_id}}',
            '{{%products_shopping_cart}}'
        );

        // drops foreign key for table `{{%shopping_cart}}`
        $this->dropForeignKey(
            '{{%fk-products_shopping_cart-shopping_cart_id}}',
            '{{%products_shopping_cart}}'
        );

        // drops index for column `shopping_cart_id`
        $this->dropIndex(
            '{{%idx-products_shopping_cart-shopping_cart_id}}',
            '{{%products_shopping_cart}}'
        );

        $this->dropTable('{{%products_shopping_cart}}');
    }
}
