<?php


namespace app\models;

use yii\data\ActiveDataProvider;


class BookSearch extends Book
{

    public function rules()
    {
        return [
            [['id', 'author_id'], 'string'],
            [['title', 'description', 'isbn'], 'safe'],
        ];
    }


    public function search()
    {
        $query = Book::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query->joinWith('author'),
            'sort' => [
                'attributes' => [
                    'author' => [
                        'asc' => ['authors.author' => SORT_ASC],
                        'desc' => ['authors.author' => SORT_DESC],
                    ],
                    'birth_date' => [
                        'asc' => ['authors.birth_date' => SORT_ASC],
                        'desc' => ['authors.birth_date' => SORT_DESC],
                    ],
                    'title' => [
                        'asc' => ['title' => SORT_ASC],
                        'desc' => ['title' => SORT_DESC],
                    ],

                ]
            ],
            'pagination' => [
                'pageSize' => 15
            ]
        ]);

        /*$this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }*/

        // grid filtering conditions
        /*$query->andFilterWhere([
            'customer.id' => $this->id,
            'birth_date' => $this->birth_date,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        $query->andFilterWhere(['like', 'address.country', $this->country]);*/

        return $dataProvider;
    }
}

