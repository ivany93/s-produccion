<?php

namespace backend\controllers;

use Yii;
use common\models\SiteConfig;
use common\models\SiteConfigSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SiteConfigController implements the CRUD actions for SiteConfig model.
 */
class Site_configController extends Controller
{
    public $path;

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function beforeAction($action)
    {
        $this->path = Yii::getAlias('@frontend') . '/web/upload/site_config/';
        return parent::beforeAction($action);
    }

    /**
     * Lists all SiteConfig models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SiteConfigSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SiteConfig model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new SiteConfig model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SiteConfig();

        if ($model->load(Yii::$app->request->post())) {

            $model->file_ppt = UploadedFile::getInstance($model, 'file_ppt');

            $model->file = $model->file_ppt->name;

            $model->save();

            $model->uploadFile($model,$this->path);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->file_ppt = UploadedFile::getInstance($model, 'file_ppt')) {

            $model->file = $model->file_ppt->name;
            $model->uploadFile($model,$this->path);
        } else {
            $model->file_ppt = $model['file'];
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    protected function findModel($id)
    {
        if (($model = SiteConfig::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
