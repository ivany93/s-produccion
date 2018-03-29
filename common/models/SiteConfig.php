<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site_config".
 *
 * @property int $id
 * @property string $seo_title
 * @property string $seo_keywords
 * @property string $seo_description
 * @property string $file
 * @property string $f_name
 * @property string $f_link
 * @property string $l_name
 * @property string $l_link
 * @property int $active
 */
class SiteConfig extends \yii\db\ActiveRecord
{
    public $file_ppt;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_config';
    }

    public function uploadFile($model,$path)
    {
        $path_file = $path.''.$model->file_ppt->name;
        $model->file_ppt->saveAs($path_file);
        return $path_file;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seo_title'], 'required'],
            [['active'], 'integer'],
            [['seo_title', 'seo_keywords', 'seo_description', 'file', 'f_name', 'f_link', 'l_name', 'l_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'seo_title' => 'Seo Title',
            'seo_keywords' => 'Seo Keywords',
            'seo_description' => 'Seo Description',
            'file' => 'File',
            'f_name' => 'F Name',
            'f_link' => 'F Link',
            'l_name' => 'L Name',
            'l_link' => 'L Link',
            'active' => 'Active',
        ];
    }
}
