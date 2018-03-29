<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SiteConfig */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Site Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="site-config-view">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'seo_title',
                        'seo_keywords',
                        'seo_description',
                        'file',
                        'f_name',
                        'f_link',
                        'l_name',
                        'l_link',
                        'active',
                    ],
                ]) ?>

            </div>
        </div>
    </div>
</div>
