<?php

use app\models\Author;
use yii\db\Migration;


class m160705_064515_populate_authors extends Migration
{
    public function up()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            $author = new Author();
            $author->author = $faker->name;
            $author->birth_date = $faker->date('Y');
            $author->save();
        }
    }

    public function down()
    {
        $this->delete('authors');
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
