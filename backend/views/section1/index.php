<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Section1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Section1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="section1-index">

                <h1><?= Html::encode($this->title) ?></h1>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('Create Section1', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
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

                            'attribute' => 'arrow_down',
                            'contentOptions' => ['style' => 'background:grey; width=40px;'],
                            'label' => 'arrow_down',
                            'format' => 'html',
                            'value' => function ($model) {
                                return Html::img('/frontend/web/upload/section1/'.$model->arrow_down,
                                    ['width' => '50px']);
                            }
                        ],
                        'title_presentation',
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
