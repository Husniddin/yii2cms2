<?php
    use app\components\OurClientsWidget;
    use app\components\ContactsWidget;
    use app\components\LocationWidget;
    use app\components\WhyChooseUsWidget;
    use app\components\ProductsWidget;
    use app\components\BlogWidget;
    use app\components\ServicesWidget;
    use app\components\GetFreeWidget;
    use app\components\IntroWidget;
?>
<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<!-- blok about -->
<section class="blok-about">
    <!-- container  -->         
    <div class="container">
        <?= IntroWidget::widget(); ?>      
    </div>
    <!-- container // -->
</section>
<!-- blok about // -->

<!-- container  -->
<div class="container">

    <section class="blok blok-bonus">
        <?= GetFreeWidget::widget(); ?>
    </section>

    <section class="blok blok-services">
    <?= ServicesWidget::widget(); ?>
    </section>

    <section class="blok blok-products">
        <?= BlogWidget::widget(); ?>
    </section>


    <section class="blok">
        <?= ProductsWidget::widget(); ?>
    </section>


    <section class="blok">
        <?= WhyChooseUsWidget::widget(); ?>
    </section>

    <section class="blok blok-clients">
        <?= OurClientsWidget::widget(); ?>
    </section>

</div>
<!-- container //  -->

<section class="blok-bottom clearfix">
    <!-- container  -->
    <div class="container">
        <?= LocationWidget::widget(); ?>
    </div>
    <!-- container //  -->
</section>

<section class="blok blok-clients">
    <!-- container  -->
    <div class="container">

        <?= ContactsWidget::widget(); ?>

    </div>
    <!-- container //  -->
</section>