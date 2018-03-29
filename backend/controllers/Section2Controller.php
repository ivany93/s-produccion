<?php

namespace backend\controllers;

use Yii;
use common\models\Section2;
use common\models\Section2Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * Section2Controller implements the CRUD actions for Section2 model.
 */
class Section2Controller extends Controller
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
        $this->path = Yii::getAlias('@frontend') . '/web/upload/section2/';
        return parent::beforeAction($action);
    }

    /**
     * Lists all Section2 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Section2Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Section2 model.
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
     * Creates a new Section2 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Section2();

        if ($model->load(Yii::$app->request->post())) {

            $model->photo_img = UploadedFile::getInstance($model, 'photo_img');
            $model->shadow_img = UploadedFile::getInstance($model, 'shadow_img');

            $model->photo = $model->photo_img->name;
            $model->shadow = $model->shadow_img->name;

            $model->save();

            $model->uploadPhoto($model,$this->path);
            $model->uploadShadow($model,$this->path);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);


        if ($model->photo_img = UploadedFile::getInstance($model, 'photo_img')) {

            $model->photo = $model->photo_img->name;
            $model->uploadPhoto($model,$this->path);
        } else {
            $model->photo_img = $model['photo'];
        }

        if ($model->shadow_img = UploadedFile::getInstance($model, 'shadow_img')) {

            $model->shadow = $model->shadow_img->name;
            $model->uploadShadow($model,$this->path);
        } else {
            $model->shadow_img = $model['shadow'];
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
        if (($model = Section2::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
