<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $book app\models\Book */
/* @var $author app\models\Author */
/* @var $form yii\widgets\ActiveForm */

?>


<?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

<?= $form->field($book, 'title')->textInput(['maxlength' => true]); ?>

<?= $form->field($book, 'isbn')->textInput(['maxlength' => true]); ?>

<?= $form->field($book, 'description')->textarea(['rows' => 6]); ?>

<?= $form->field($author, 'author')->textInput(); ?>

<?= $form->field($author, 'birth_date')->textInput(['maxlength' => true]); ?>

<div class="col-md-offset-3">
    <?= Html::submitButton($book->isNewRecord && $author->isNewRecord ?
        'Create' : 'Update', ['class' => $book->isNewRecord && $author->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

