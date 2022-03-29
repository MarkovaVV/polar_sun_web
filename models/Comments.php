<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property string $comment
 * @property int $plant
 * @property int $user
 *
 * @property Plant $plant0
 * @property User $user0
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comment', 'plant', 'user'], 'required', 'message'=>'Поле не может быть пустым.'],
            [['comment'], 'string'],
            [['plant', 'user'], 'integer'],
            [['plant'], 'exist', 'skipOnError' => true],
            [['user'], 'exist', 'skipOnError' => true],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'plant' => 'Название растения',
            'comment' => 'Комментарий',
            'user' => 'Пользователь',
        ];
    }

    public function save($runValidation = true, $attributeNames = null)
    {
        Yii::$app->db->createCommand()->insert('comments', [
            'comment' => $this->comment,
            'plant' => $this->plant,
            'user' => $this->user,
        ])->execute();
    }

    /**
     * Gets query for [[Plant0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlant0()
    {
        return $this->hasOne(Plant::className(), ['id' => 'plant']);
    }

    /**
     * Gets query for [[User0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser0()
    {
        return $this->hasOne(Users::className(), ['id' => 'user']);
    }
}
