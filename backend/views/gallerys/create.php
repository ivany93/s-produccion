<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Gallerys */

$this->title = 'Create Gallerys';
$this->params['breadcrumbs'][] = ['label' => 'Gallerys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
<div class="gallerys-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
</div>
