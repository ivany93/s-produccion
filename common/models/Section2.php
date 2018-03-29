<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "section_2".
 *
 * @property int $id
 * @property string $text
 * @property string $photo
 * @property string $shadow
 * @property string $name
 * @property string $position
 * @property int $active
 */
class Section2 extends \yii\db\ActiveRecord
{
    public $photo_img;
    public $shadow_img;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'section_2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'photo', 'shadow', 'name', 'position', 'active'], 'required'],
            [['text'], 'string'],
            [['active'], 'integer'],
            [['photo', 'shadow', 'name', 'position'], 'string', 'max' => 255],
        ];
    }

    public function uploadPhoto($model,$path)
    {
        $path_img = $path.''.$model->photo_img->name;
        $model->photo_img->saveAs($path_img);
        return $path_img;
    }

    public function uploadShadow($model,$path)
    {

        $path_img = $path.''.$model->shadow_img->name;
        $model->shadow_img->saveAs($path_img);
        return $path_img;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'photo' => 'Photo',
            'shadow' => 'Shadow',
            'name' => 'Name',
            'position' => 'Position',
            'active' => 'Active',
        ];
    }
}
