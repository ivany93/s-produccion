<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteConfigSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="site-config-search">

                <?php $form = ActiveForm::begin([
                    'action' => ['index'],
                    'method' => 'get',
                ]); ?>

                <?= $form->field($model, 'id') ?>

                <?= $form->field($model, 'seo_title') ?>

                <?= $form->field($model, 'seo_keywords') ?>

                <?= $form->field($model, 'seo_description') ?>

                <?= $form->field($model, 'file') ?>

                <?php // echo $form->field($model, 'f_name') ?>

                <?php // echo $form->field($model, 'f_link') ?>

                <?php // echo $form->field($model, 'l_name') ?>

                <?php // echo $form->field($model, 'l_link') ?>

                <?php // echo $form->field($model, 'active') ?>

                <div class="form-group">
                    <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
                    <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
