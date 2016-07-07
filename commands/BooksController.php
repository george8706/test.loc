<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\models\Book;
use yii\console\Controller;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BooksController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionAdd()
    {

        //Book::deleteAll();

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
            $book = new Book($data);
            $book->save();
        }
    }
}
