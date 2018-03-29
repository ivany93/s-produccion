<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Section3 */

$this->title = 'Create Section3';
$this->params['breadcrumbs'][] = ['label' => 'Section3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="section3-create">

                <h1><?= Html::encode($this->title) ?></h1>

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>
        </div>
    </div>
</div>
