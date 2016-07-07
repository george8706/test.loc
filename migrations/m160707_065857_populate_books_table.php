<?php

use yii\db\Migration;

class m160707_065857_populate_books_table extends Migration
{
    public function up()
    {

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            $book = new \app\models\Book();
            $book->title = $faker->sentence(4);
            $book->description = $faker->text(150);
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
