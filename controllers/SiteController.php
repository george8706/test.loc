<?php

namespace app\controllers;

use app\models\Author;
use app\models\Book;
use app\models\BookSearch;
use app\models\ContactForm;
use app\models\LoginForm;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                    //'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCatalog()
    {
        $searchModel = new BookSearch();
        $dataProvider = $searchModel->search();
        return $this->render('catalog', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionReport()
    {
        $count_books = Book::find()->count();
        $count_authors = Author::find()->count();
        $list_authors = Author::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $list_authors,
            'pagination' => false
        ]);
        return $this->render('report', compact('count_books', 'count_authors', 'dataProvider'));
    }

    public function actionAdd()
    {

        $author = new Author();
        $book = new Book();

        if ($author->load(Yii::$app->request->post()) && $book->load(Yii::$app->request->post()) &&
            $author->validate() && $book->validate()
        ) {
            $author->save(false);
            $book->save(false);
            Yii::$app->session->setFlash('success', 'Book has been added');
            $this->redirect(['site/report']);
        } else {
            Yii::$app->session->setFlash('error', 'Failed adding book');
        }
        return $this->render('add', [
            'book' => $book,
            'author' => $author
        ]);
    }

    public function actionUpdate($id)
    {

        $book = $this->findModel($id);
        $author = Author::findOne($book->author_id);

        if ($author->load(Yii::$app->request->post()) && $book->load(Yii::$app->request->post()) &&
            $author->validate() && $book->validate()
        ) {
            $author->save(false);
            $book->save(false);
            $this->redirect(['site/report']);
            Yii::$app->session->setFlash('success', 'Record has been changed');
        } else {
            Yii::$app->session->setFlash('error', 'Failed changing record');
        }
        return $this->render('update', compact('book', 'author'));
    }

    protected function findModel($id)
    {
        if (($model = Book::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested record does not exist.');
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['site/catalog']);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
