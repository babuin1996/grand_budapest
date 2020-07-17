<?php

namespace app\models;

use app\components\UserIdentity;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string|null $login
 * @property string|null $password_hash
 * @property string|null $auth_key
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'password_hash', 'auth_key'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password_hash' => 'Password Hash',
            'auth_key' => 'Auth Key',
            'rememberMe' => 'запомнить',
        ];
    }

    /**
     * @var $login string
     *
     * @return ActiveRecord
     */
    public static function findByLogin($login)
    {

        return self::find()->where(['login' => $login])->one();
    }

    /**
     * @var $id integer
     *
     * @return UserIdentity
     */
    public static function findIdentity($id)
    {
        return UserIdentity::findIdentity($id);
    }
}
