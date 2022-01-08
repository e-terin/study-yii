<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\BasicAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

BasicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html  class="h-100">
<head>
	<?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
123
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
	    <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    789
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>