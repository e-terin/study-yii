<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\BasicAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

BasicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html  class="h-100">
<head>
	<?php $this->head() ?>
	<?php $this->registerCsrfMetaTags() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
<div class="div">
    <ul class="nav nav-pills">
        <li class="nav-item">
           <?=Html::a('link text', Url::to('123', true))?>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
        </li>
    </ul>
</div>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
	    <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    footer
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>