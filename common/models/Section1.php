<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "section_1".
 *
 * @property int $id
 * @property string $arrow_down
 * @property string $title_presentation
 * @property string $h1
 * @property int $active
 */
class Section1 extends \yii\db\ActiveRecord
{
    public $background_img;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'section_1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['arrow_down_img'], 'file', 'extensions'=>'jpg, gif, png'],
            [['title_presentation', 'h1'], 'required'],
            [['title_presentation', 'h1',  'arrow_down'], 'string', 'max' => 255],
            [['active'], 'integer'],
        ];
    }

    public function uploadArrownDown($model,$path)
    {
        $path_arrow_down_img = $path.'' . $model->arrow_down_img->name;
            $model->arrow_down_img->saveAs($path_arrow_down_img);
        return $path_arrow_down_img;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'h1' => 'h1',
            'active' => 'Active',
            'background' => 'Background',
            'arrow_down' => 'Arrow Down',
            'title_presentation' => 'Title Presentation',
        ];
    }
}
