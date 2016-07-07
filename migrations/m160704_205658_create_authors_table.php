<?php

use yii\db\Migration;

/**
 * Handles the creation for table `authors_table`.
 */
class m160704_205658_create_authors_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('authors', [
            'id' => $this->primaryKey(),
            'author' => $this->string(30)->notNull(),
            'birth_date' => $this->integer()->notNull(),
            'count_books' => $this->integer(5),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('authors');
    }
}
