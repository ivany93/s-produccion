<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteConfig */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="site-config-form">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'active')->checkbox() ?>

                <?= $form->field($model, 'seo_title')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'seo_keywords')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'seo_description')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'f_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'f_link')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'l_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'l_link')->textInput(['maxlength' => true]) ?>


                <?= $form->field($model, 'file_ppt')->fileInput() ?>
                <?php if ($model->file !== '') { ?>
                    <img src="/frontend/web/upload/site_config/<?= $model->file; ?>" width="100px">
                <?php } ?>


                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
