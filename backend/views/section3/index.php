<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Section3Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Section3s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="section3-index">

                <h1><?= Html::encode($this->title) ?></h1>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('Create Section3', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        [
                            'attribute' => 'id',
                            'contentOptions' => ['style'=>'width=10px;'],
                            'label' => 'id',
                            'format' => 'html',
                            'value' => function ($model) {
                                return $model->id;
                            }
                        ],
                        'title1',
                        'title2',
                        'title3',
                        [

                            'attribute' => 'active',
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
