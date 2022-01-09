<?php

namespace app\controllers;

use app\models\Post;
use yii\web\Controller;
use Yii;
use app\models\TestForm;

class PostController extends Controller
{
    public $layout = 'basic'; // назначение для всего контроллера

	public function actionIndex($post_id = null)
    {

		$model = new TestForm();

		if ($model->load(Yii::$app->request->post()))
		{
			if ($model->validate()){
				Yii::$app->session->setFlash('success', 'Получилось!!');
				return $this->refresh();
			} else {
				Yii::$app->session->setFlash('error', 'Бяда');
			}
		}





		if (Yii::$app->request->isAjax){
			return 'test';
        }

		$this->view->registerMetaTag(['name'=> 'description' , 'content' => '123123123123']);

		// $this->layout = 'basic'; назначение шаблона локально
		return $this->render('test',compact('model'));
    }

	public function actionShow()
	{
		//$posts = Post::find()->all();
		//$posts = Post::find()->orderBy(['id'=>SORT_DESC])->all();
		// $posts = Post::find()->asArray()->all();
		// $posts = Post::find()->where(['id' => 1])->asArray()->all(); // передача параметров массивом
		// $posts = Post::find()->where('id=1')->asArray()->all();  // передача параметров строкой
		// $posts = Post::find()->where(['like', 'name', '2'])->asArray()->all();  // like
		// $posts = Post::find()->where(['<=', 'id', '2'])->asArray()->one();  // так возвращается одна запись
		// $posts = Post::find()->where(['<=', 'id', '2'])->asArray()->limit(1)->one();  // так тоже, но запрос лучше, т.к. не вытаскивает все

		$query = "SELECT * FROM post WHERE name LIKE :param";
		$posts = Post::findBySql($query, ['param' =>'%азв%'])->all();
		return $this->render('show', compact('posts'));
	}

}
