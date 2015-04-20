<?php
use yii\helpers\Html;
// use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
// use frontend\widgets\Alert;
use app\components\TopMenuWidget;
use app\components\MainMenuWidget;
use app\components\FooterWidget;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <!-- main wrap start -->
	<div class="main-wrap">

		<!-- header  -->
		<header id="header" class="clearfix">
			<?= TopMenuWidget::widget(); ?>
		</header>
		<!-- header // -->

		<!-- main -->
		<section class="main">
			<div class="slider-container">
			</div>
			<div class="container">				
				<?= MainMenuWidget::widget(); ?>
			</div>
		</section>
		<!-- // main -->

		<?= $content ?>

		<!-- footer start -->
		<footer id="footer">
			<div class="container">
				<?= FooterWidget::widget(); ?>
			</div>
		</footer>
		<!-- footer finish  -->
	</div>
	<!-- main wrap finish -->
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
