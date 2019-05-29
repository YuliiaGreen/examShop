<?php

use yii\db\Migration;

/**
 * Class m190513_140558_alter_user_create_column_sex
 */
class m190513_140558_alter_user_create_column_personal_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'deleted_at', $this->dateTime());
        $this->addColumn('user', 'sex', 'enum("male","female","underfined")');
        $this->addColumn('user', 'surname', 'varchar(50)');
        $this->addColumn('user', 'fathersname', 'varchar(50)');
        $this->addColumn('user', 'dateOfBirth', $this->date());
        $this->addColumn('user', 'phoneNomber', $this->float());
        $this->addColumn('user', 'city', 'varchar(50)');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
//        echo "m190513_140558_alter_user_create_column_sex cannot be reverted.\n";
        $this->dropColumn('user', 'sex');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190513_140558_alter_user_create_column_sex cannot be reverted.\n";

        return false;
    }
    */
}
