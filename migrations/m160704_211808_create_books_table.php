<?php

use yii\db\Migration;

/**
 * Handles the creation for table `books_table`.
 */
class m160704_211808_create_books_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('books', [
            'id' => $this->primaryKey(),
            'title' => $this->string(30)->notNull(),
            'description' => $this->string(),
            'isbn' => $this->string(14)->notNull(),
            'author_id' => $this->integer(11),
        ]);
        $this->addForeignKey('book_author', 'books', 'author_id', 'authors', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('book_author', 'books');
        $this->dropTable('books');
    }
}
