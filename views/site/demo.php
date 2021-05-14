<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <?= LinkPager::widget([ 'pagination' => $pagination]);?>
</div>
