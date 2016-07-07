<?php

use app\models\Book;
use yii\db\Migration;

class m160705_073449_populate_books extends Migration
{
    public function up()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 30; $i++) {
            $book = new Book();
            $book->title = $faker->words(3);
            $book->description = $faker->sentence(10);
            $book->isbn = $faker->isbn13;
            $book->save();
        }
    }

    public function down()
    {
        $this->delete('books');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
