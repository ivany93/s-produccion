<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "gallery_image".
 *
 * @property int $id
 * @property int $id_gallery
 * @property string $name_img
 */
class GalleryImage extends \yii\db\ActiveRecord
{
    public $imageFiles = array();

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 20],
            [['id_gallery', 'name_img'], 'required'],
            [['id_gallery'], 'integer'],
            [['name_img'], 'string', 'max' => 255],
        ];
    }


    public function upload($id_gallery, $imageFiles, $path)
    {
        $name_array_sql = array();
        $i = 0;

        foreach ($imageFiles as $file) {
            $path_for_one_img = $path;
            $name_array_sql [] = array($id_gallery,
                $file->baseName . '.' . $file->extension
            );
            $path_for_one_img .= $file->baseName . '.' . $file->extension;
            $file->saveAs($path_for_one_img);
            $i++;
        }

        Yii::$app->db->createCommand()->batchInsert('gallery_image',
            ['id_gallery', 'name_img'],
            $name_array_sql
        )->execute();
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_gallery' => 'Id Gallery',
            'name_img' => 'Name Img',
        ];
    }
}
