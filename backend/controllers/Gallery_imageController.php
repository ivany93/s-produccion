<?php

namespace backend\controllers;

use common\models\GalleryImage;
use Yii;
use common\models\Gallerys;
use common\models\GallerysSearch;
use yii\helpers\FileHelper;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * GallerysController implements the CRUD actions for Gallerys model.
 */
class Gallery_imageController extends Controller
{
    public $path;


    public function beforeAction($action)
    {
        $this->path = Yii::getAlias('@frontend') . '/web/upload/gallerys/gallery_';
        return parent::beforeAction($action);
    }

    public function actionUpload($id_gallery)
    {
        $model = new GalleryImage();
        $id_gallery = Yii::$app->request->get('id_gallery');
        if(empty($id_gallery)){
            return $this->render('no_gallery');
            die();
        }

        if (Yii::$app->request->isPost) {
            $full_path = $this->path."".$id_gallery."/";
            FileHelper::createDirectory($full_path);

            $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
            $model->upload($id_gallery,$model->imageFiles,$full_path);

            header("Location: /admin/gallerys");
            die();
        }

        return $this->render('upload', ['model' => $model]);
    }


    public function actionView($id_gallery)
    {
        $id_gallery = Yii::$app->request->get('id_gallery');
        if(empty($id_gallery)){
            return $this->render('no_gallery');
            die();
        }

        $model = GalleryImage::find()->where(['id_gallery' => $id_gallery])->asArray()->all();

        return $this->render('view', [
            'model' => $model,
            'id_gallery' => $id_gallery,
        ]);
    }


    public function actionDelete($id,$id_gallery)
    {

        $this->findModel($id)->delete();
       header("location: /admin/gallery_image/view?id_gallery=".$id_gallery);
exit;
    }

    protected function findModel($id)
    {
        if (($model = GalleryImage::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
