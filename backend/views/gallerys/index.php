<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CallerysSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gallerys';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
    <div class="col-lg-10">
<div class="gallerys-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gallerys', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description',
            'date',
            [

                'attribute' => 'active',
                'contentOptions' => ['width=40px;'],
                'label' => 'active',
                'format' => 'html',
                'value' => function ($model) {
                    if($model->active == 1){
                        return "Активная";
                    }else{
                        return "";
                    }

                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Фото',
                'headerOptions' => ['width' => '15'],
                'template' => '{add}{photo}',

                'buttons' => [
                    'add' => function($url, $model){
                        return Html::a(
                            '<span  style="font-size:25px; margin-right: 5px;" class="glyphicon glyphicon-plus"> </span>',
                            "/admin/gallery_image/upload?id_gallery=".$model->id,[
                                'title' => 'добавить фото',
                            ]
                            );
                    },

                    'photo' => function ($url,$model) {
                        return  Html::a(
                            '<span  style="font-size:25px;"  class="glyphicon glyphicon-camera"></span>',
                            '/admin/gallery_image/view?id_gallery='.$model->id,
                            [
                                'title' => 'Просмотреть фото',
                            ]
                        );
                    },
                ],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
</div>