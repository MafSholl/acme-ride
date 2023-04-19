<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PlaceLang $model */

$this->title = Yii::t('app', 'Create Place Lang');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Place Langs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="place-lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
