<?php
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $count_authors \app\models\Author */
/* @var $count_books \app\models\Book */
use yii\grid\GridView;

?>


<ul class="libinfo">
    <li><span>Amount authors:</span> <?= $count_authors ?></li>
    <li><span>Amount books:</span> <?= $count_books ?></li>
</ul>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'options' => [
        'class' => 'authors'
    ],
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'author',
        'birth_date',
        'count_books',
    ],
]); ?>


