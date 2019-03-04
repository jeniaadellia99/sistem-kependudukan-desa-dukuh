<?php

namespace app\models;

use Yii;
use Yii\helpers\Html;


    /**
     * {@inheritdoc}
     */
class User extends \yii\db\ActiveRecord  implements \yii\web\IdentityInterface
{

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
            [['username', 'password'], 'required'],
            [['id_user_role'], 'integer'],
            [['username'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 255],
           
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
            'password' => 'Password',
            'id_user_role' => 'Id User Role',
           
        ];
    }
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return self::findOne(['username'=>$username]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public static function isWarga()
    {
        if (Yii::$app->user->isGuest) {
            return false;
        }
        $model = User::findOne(['username'=> Yii::$app->user->identity->username]);
        if ($model == null) {
            return false;
        }elseif ($model->id_user_role == 2) {
            return true;
        }
            return false;
    }
     public static function isAdmin()
    {
        if (Yii::$app->user->isGuest) {
            return false;
        }
        $model = User::findOne(['username'=> Yii::$app->user->identity->username]);
        if ($model == null) {
            return false;
        }elseif ($model->id_user_role == 1) {
            return true;
        }
            return false;
    }
}
