<?php
namespace frontend\controllers;

use common\models\GalleryImage;
use common\models\Gallerys;
use common\models\Section1;
use common\models\Section2;
use common\models\Section3;
use common\models\SiteConfig;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{


    public function actionIndex()
    {
        $section1 = Section1::find()->where(['active'=>1])->asArray()->one();
        $section2 = Section2::find()->where(['active'=>1])->asArray()->one();
        $section3 = Section3::find()->where(['active'=>1])->asArray()->one();
        $gallerys = Gallerys::find()->where(['active'=>1])->asArray()->all();
        $all_image_gallery = GalleryImage::find()->asArray()->all();
        $site_config = SiteConfig::find()->where(['active'=>1])->asArray()->one();


        $this->view->params['title_presentation'] = $section1['title_presentation'];
        $this->view->params['f_name'] = $site_config['f_name'];
        $this->view->params['f_link'] = $site_config['f_link'];
        $this->view->params['l_link'] = $site_config['l_link'];
        $this->view->params['l_name'] = $site_config['l_name'];
        $this->view->params['file'] = $site_config['file'];

        return $this->render('index',[
            'section1' => $section1,
            'section2' => $section2,
            'section3' => $section3,
            'gallerys' => $gallerys,
            'all_image_gallery' => $all_image_gallery,
            'site_config' => $site_config,
        ]);
    }


}
