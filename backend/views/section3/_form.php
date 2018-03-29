<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Section3 */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="section3-form">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'active')->checkbox() ?>

                <?= $form->field($model, 'title1')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'title2')->textInput() ?>

                <?= $form->field($model, 'title3')->textInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
