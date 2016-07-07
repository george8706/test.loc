<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property integer $id
 * @property string $author
 * @property integer $birth_date
 *
 * @property Book[] $books
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'authors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author', 'birth_date'], 'required'],
            [['birth_date'], 'integer'],
            [['author'], 'string', 'max' => 30],
            ['count_books', 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'author' => 'Author',
            'birth_date' => 'Birth Date',
            'count_books' => 'Amount books'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['author_id' => 'id'])->inverseOf('book_author');
    }
}
