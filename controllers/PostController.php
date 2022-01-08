<?php

namespace app\controllers;

use yii\web\Controller;

class PostController extends Controller
{
    public $layout = 'basic'; // назначение для всего контроллера

	public function actionIndex($post_id = null)
    {
        // $this->layout = 'basic'; назначение шаблона локально
		return $this->render('index',compact('post_id'));
    }

}
