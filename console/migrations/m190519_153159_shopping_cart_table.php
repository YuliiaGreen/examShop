<?php

use yii\db\Migration;

//use yii;


/**
 * Class m190519_153159_shopping_cart_table
 */
class m190519_153159_shopping_cart_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shopping_cart}}', [
            'id' => $this->primaryKey(),
//    'status'=>$this->boolean()->defaultValue(0),
            'status' => $this->enum(['created', 'approved', 'unndone', 'submitted', 'refused']) . "DEFAULT 'created'",
            'user_id' => $this->integer(11),
            'data' => $this->json(),
            //зберігає дані замовлення
            'created_at' => $this->bigInteger()->defaultValue(null),
            'updated_at' => $this->bigInteger()->defaultValue(null),
            'deleted_at' => $this->bigInteger(),
        ]);
        // creates index for column `user_id`
        $this->createIndex(
            '{{idx-shopping_cart-user_id}}',
            '{{%shopping_cart}}',
            'user_id'
        );

        // add foreign key for table `{{%shopping_cart}}`
        $this->addForeignKey(
            '{{fk-shopping_cart-user_id}}',
            '{{%shopping_cart}}',
            'user_id',
            '{{%user}}',
            'id',
            'NO ACTION'
        );
    }

    public function enum(array $data)
    {
        return 'enum("' . implode('","', $data) . '")';
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190519_153159_shopping_cart_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190519_153159_shopping_cart_table cannot be reverted.\n";

        return false;
    }
    */
}
