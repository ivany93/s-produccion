<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gallerys".
 *
 * @property int $id
 * @property int $active
 * @property string $name
 * @property string $description
 * @property string $cover
 * @property string $date
 */
class Gallerys extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallerys';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['active'], 'integer'],
            [['name', 'description','cover','date'], 'string', 'max' => 255],
        ];
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'active' => 'Active',
            'date' => 'Date',
        ];
    }
}
