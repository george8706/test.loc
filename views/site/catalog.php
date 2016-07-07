<?php
use yii\grid\GridView;

?>

<?php
/* @var $dataProvider yii\data\ActiveDataProvider */
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'title',
        'description',
        'isbn',
        [
            'attribute' => 'author',
            'label' => 'Author',
            'value' => function ($model) {
                return $model->author->author;
            }
        ],
        [
            'attribute' => 'birth_date',
            'label' => 'Birth Date',
            'value' => function ($model) {
                return $model->author->birth_date;
            }
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            //'template' => '{view}','{edit}','{delete}',
            /*'buttons'=>[
                'delete'=>function ($url, $model, $key) {
                    return  Html::a('<span class="glyphicon glyphicon glyphicon-trash"></span>',['site/delete', 'id' => $key],
                        [
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ]
                        ]);}   
            ]*/

        ]

    ],
]);
?>