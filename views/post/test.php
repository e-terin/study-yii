<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Alert;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

?>
<h1>Test Action</h1>

<?php
    if (Yii::$app->session->hasFlash('success')){
	    echo Alert::widget([
		    'options' => [
			    'class' => 'alert-info',
		    ],
		    'body' => Yii::$app->session->getFlash('success'),
	    ]);

    }

    // два разных способа использовать Alert
    if (Yii::$app->session->hasFlash('error')){
	    Alert::begin([
		    'options' => [
			    'class' => 'alert-warning',
		    ],
	    ]);

	    echo Yii::$app->session->getFlash('error');

	    Alert::end();

    }
?>


<?php



$form = ActiveForm::begin(['id' => 'contact-form']); ?>

    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'email')->input('email')?>

    <?= $form->field($model, 'body')
            // ->label('Текст сообщения')
            ->textarea()
    ?>


    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    </div>

<?php ActiveForm::end(); ?>
