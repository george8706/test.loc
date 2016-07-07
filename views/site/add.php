<?php

/* @var $this yii\web\View */
/* @var $book app\models\Book */
/* @var $author app\models\Author */

?>
<div class="">

    <?= $this->render('_form', [
        'book' => $book,
        'author' => $author
    ]) ?>

</div>
