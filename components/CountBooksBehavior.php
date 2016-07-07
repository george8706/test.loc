<?php

namespace app\components;

use app\models\Author;
use Yii;
use yii\base\Behavior;
use yii\db\ActiveRecord;

class CountBooksBehavior extends Behavior
{
    public function events()
    {
        return [
            ActiveRecord::EVENT_AFTER_INSERT => 'countAfter',
            ActiveRecord::EVENT_AFTER_UPDATE => 'countAfter',
            ActiveRecord::EVENT_AFTER_DELETE => 'countAfterDelete',
        ];
    }

    public function countAfter($event)
    {
        $author_id = $this->owner->author_id;
        $new_count = $this->owner->find()->where(['author_id' => $author_id])->count();

        $author = Author::findOne($author_id);
        $author->count_books = $new_count;
        $author->save();
    }

    public function countAfterDelete($event)
    {
        $author_id = $this->owner->author_id;

        $author = Author::findOne($author_id);
        $new_count = $this->owner->find()->where(['author_id' => $author_id])->count();
        $author->count_books = $new_count;
        $author->save();
    }

}