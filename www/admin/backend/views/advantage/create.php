<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Advantage */

$this->title = Yii::t('app', 'Create Advantage');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Advantages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advantage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
