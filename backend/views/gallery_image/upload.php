<?php
use yii\widgets\ActiveForm;

?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'], 'method' => 'POST']) ?>

            <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

            <button>Submit</button>

            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>
