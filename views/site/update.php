<?php
/* @var $book app\models\Book */
/* @var $author app\models\Author */
?>

<?= $this->render('_form', [
    'book' => $book,
    'author' => $author
])
?>