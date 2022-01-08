<?php

namespace app\controllers;

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

}
