<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Section1 */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="section1-form">

                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

                <?= $form->field($model, 'active')->checkbox() ?>

                <?= $form->field($model, 'h1')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'title_presentation')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'arrow_down_img')->fileInput() ?>
                <?php
                if ($model->arrow_down !== '') { ?>
                    <img src="/frontend/web/upload/section1/<?= $model->arrow_down; ?>">
                <?php } ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
