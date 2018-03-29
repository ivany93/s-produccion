<?php

namespace backend\controllers;

use Yii;
use common\models\Section1;
use common\models\Section1Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


class Section1Controller extends Controller
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
        $this->path = Yii::getAlias('@frontend') . '/web/upload/section1/';
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        $searchModel = new Section1Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    public function actionCreate()
    {

        $model = new Section1();

        if ($model->load(Yii::$app->request->post())) {

            $model->arrow_down_img = UploadedFile::getInstance($model, 'arrow_down_img');

            $model->arrow_down = $model->arrow_down_img->name;

            $model->save();

            $model->uploadArrownDown($model,$this->path);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->arrow_down_img = UploadedFile::getInstance($model, 'arrow_down_img')) {
            // если есть новый файл -> удаляем старый
            if(is_dir(Yii::getAlias('@app') . '/web/upload/section1/' . $model->arrow_down)) {
//                unlink(Yii::getAlias('@frontend') . '/web/upload/section1/' . $model->arrow_down);
            }

            $model->arrow_down = $model->arrow_down_img->name;
            $model->uploadArrownDown($model,$this->path);
        } else {
            $model->arrow_down_img = $model['arrow_down'];
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
        if (($model = Section1::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
