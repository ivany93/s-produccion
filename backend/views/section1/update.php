<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Section1 */

$this->title = 'Update Section1: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Section1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="section1-update">

                <h1><?= Html::encode($this->title) ?></h1>

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>
        </div>
    </div>
</div>
