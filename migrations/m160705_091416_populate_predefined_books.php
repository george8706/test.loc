<?php

use yii\db\Migration;

class m160705_091416_populate_predefined_books extends Migration
{
    public function up()
    {
        $booksData = [
            [
                'title' => 'Sed ut perspiciatis unde omnis',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 7
            ],
            [
                'title' => 'Nemo enim ipsam voluptatem',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 7
            ],
            [
                'title' => 'Neque porro quisquam',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 7
            ],
            [
                'title' => 'Ut enim ad minima veniam',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 7,
            ],
            [
                'title' => 'Quis autem vel eum',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 7,
            ],
            [
                'title' => 'Sed ut perspiciatis unde omnis',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 9,
            ],
            [
                'title' => 'Nemo enim ipsam voluptatem',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 9,
            ],
            [
                'title' => 'Neque porro quisquam',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 9,
            ],
            [
                'title' => 'Ut enim ad minima veniam',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 10,
            ],
            [
                'title' => 'Quis autem vel eum',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 10,
            ],
            [
                'title' => 'Sed ut perspiciatis unde omnis',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 10,
            ],
            [
                'title' => 'Nemo enim ipsam voluptatem',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 11,
            ],
            [
                'title' => 'Neque porro quisquam',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 11,
            ],
            [
                'title' => 'Ut enim ad minima veniam',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 11,
            ],
            [
                'title' => 'Quis autem vel eum',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 9,
            ],
            [
                'title' => 'Sed ut perspiciatis unde omnis',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 9,
            ],
            [
                'title' => 'Nemo enim ipsam voluptatem',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 11,
            ],
            [
                'title' => 'Neque porro quisquam',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 8,
            ],
            [
                'title' => 'Ut enim ad minima veniam',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 10,
            ],
            [
                'title' => 'Quis autem vel eum',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 10,
            ],
            [
                'title' => 'Sed ut perspiciatis unde omnis',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
            ],
            [
                'title' => 'Nemo enim ipsam voluptatem',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 10,
            ],
            [
                'title' => 'Neque porro quisquam',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 9,
            ],
            [
                'title' => 'Ut enim ad minima veniam',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 8,
            ],
            [
                'title' => 'Quis autem vel eum',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
                'isbn' => '57205238025584',
                'author_id' => 9,
            ],
        ];
        foreach ($booksData as $data) {
            $book = new \app\models\Book($data);
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
