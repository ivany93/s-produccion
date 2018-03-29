<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Section2 */

$this->title = 'Create Section2';
$this->params['breadcrumbs'][] = ['label' => 'Section2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="section2-create">

                <h1><?= Html::encode($this->title) ?></h1>

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>
        </div>
    </div>
</div>
