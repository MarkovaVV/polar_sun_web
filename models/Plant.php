<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plant".
 *
 * @property int $id
 * @property string $name
 * @property string $latin
 * @property string $family
 * @property string|null $place
 * @property string|null $habitat
 * @property string|null $date
 * @property string|null $collector
 * @property string|null $determinate
 * @property string|null $general
 * @property string $photo
 *
 * @property Comments[] $comments
 */
class Plant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'latin', 'family', 'photo'], 'required', 'message'=>'Поле не может быть пустым.'],
            [['date'], 'safe'],
            [['general', 'photo'], 'string'],
            [['name', 'latin'], 'string', 'max' => 80],
            [['family', 'place', 'habitat', 'collector', 'determinate'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'latin' => 'Латинское название',
            'family' => 'Семейство',
            'place' => 'Место сбора',
            'habitat' => 'Местообитание',
            'date' => 'Дата сбора',
            'collector' => 'Собрал',
            'determinate' => 'Определил',
            //'general' => 'General',
            'photo' => 'Фотография',
        ];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['plant' => 'id']);
    }
}
