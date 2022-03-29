<?php

namespace app\models;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    public $firstname;
    public $lastname;
    public $mail;
    public $password;
    public $authKey;
    public $accessToken;

    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {

        $rows = (new \yii\db\Query())
        ->select(['id', 'firstname', 'lastname', 'mail as accessToken', 'mail as authKey', 'password'])
        ->from('user')
        ->where (['id'=>$id])
        ->one();
        if ($rows){
            return new static($rows);
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {

        $rows = (new \yii\db\Query())
        ->select(['id', 'firstname', 'lastname', 'mail as accessToken', 'mail as authKey', 'password'])
        ->from('user')
        ->where (['mail'=>$token])
        ->one();
        if ($rows){
            return new static($rows);
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
        $rows = (new \yii\db\Query())
        ->select(['id', 'firstname', 'lastname', 'mail as accessToken', 'mail as authKey', 'password'])
        ->from('user')
        ->where (['firstname'=>$username])
        ->one();
        if ($rows){
            return new static($rows);
        }

        return null;
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
        return $this->authKey;
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

}
