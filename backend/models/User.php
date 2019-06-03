<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string $verification_token
 * @property string $deleted_at
 * @property string $sex
 * @property string $surname
 * @property string $fathersname
 * @property string $dateOfBirth
 * @property double $phoneNomber
 * @property string $city
 *
 * @property ShoppingCart[] $shoppingCarts
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['deleted_at', 'dateOfBirth'], 'safe'],
            [['sex'], 'string'],
            [['phoneNomber'], 'number'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['surname', 'fathersname', 'city'], 'string', 'max' => 50],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
            'deleted_at' => 'Deleted At',
            'sex' => 'Sex',
            'surname' => 'Surname',
            'fathersname' => 'Fathersname',
            'dateOfBirth' => 'Date Of Birth',
            'phoneNomber' => 'Phone Nomber',
            'city' => 'City',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */


}
