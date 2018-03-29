<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Section2 */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="section2-form">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'active')->checkbox() ?>

                <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'photo_img')->fileInput() ?>
                <?php if ($model->photo !== '') { ?>
                    <img src="/frontend/web/upload/section2/<?= $model->photo; ?>" width="100px">
                <?php } ?>

                <?= $form->field($model, 'shadow_img')->fileInput() ?>
                <?php
                if ($model->shadow !== '') { ?>
                    <img src="/frontend/web/upload/section2/<?= $model->shadow; ?>">
                <?php } ?>


                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
