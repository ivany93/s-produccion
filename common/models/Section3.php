<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "section_3".
 *
 * @property int $id
 * @property int $active
 * @property string $title1
 * @property string $title2
 * @property string $title3
 */
class Section3 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'section_3';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['active'], 'integer'],
            [['title1','title2', 'title3'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'active' => 'Active',
            'title1' => 'Title1',
            'title2' => 'Title2',
            'title3' => 'Title3',
        ];
    }
}
