<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Section2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Section2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="section2-index">

                <h1><?= Html::encode($this->title) ?></h1>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('Create Section2', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        [
                            'attribute' => 'id',
                            'contentOptions' => ['width=10px;'],
                            'label' => 'id',
                            'format' => 'html',
                            'value' => function ($model) {
                                return $model->id;
                            }
                        ],
                        [
                            'attribute'=>'text',
                            'label'=>'Text',
                            'headerOptions' => ['width' => '10'],
                            'content'=>function($model){
                                return  htmlspecialchars(\yii\helpers\StringHelper::truncate($model->text, 20));
                            }
                        ],
                        [

                            'attribute' => 'photo',
                            'contentOptions' => ['style' => 'width=40px;'],
                            'label' => 'photo',
                            'format' => 'html',
                            'value' => function ($model) {
                                return Html::img('/frontend/web/upload/section2/'.$model->photo,
                                    ['width' => '50px']);
                            }
                        ],
                        [

                            'attribute' => 'shadow',
                            'contentOptions' => ['style' => 'width=40px;'],
                            'label' => 'shadow',
                            'format' => 'html',
                            'value' => function ($model) {
                                return Html::img('/frontend/web/upload/section2/'.$model->shadow,
                                    ['width' => '50px']);
                            }
                        ],
                        'name',
                        'position',
                        [

                            'attribute' => 'active',
                            'contentOptions' => ['width=40px;'],
                            'label' => 'active',
                            'format' => 'html',
                            'value' => function ($model) {
                                if($model->active == 1){
                                    return "Астивная";
                                }else{
                                    return "";
                                }

                            }
                        ],

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>
