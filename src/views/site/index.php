<?php
/* @var $this yii\web\View */
$this->title .= 'Home';
?>

<header>
    <div class="jumbotron">
        <div class="container">
            <h1>Phundament <i>nano</i></h1>
            <h2>You will like it.</h2>
        </div>
    </div>
</header>

<div class="site-index">

    <?= \app\modules\prototype\widgets\HtmlWidget::widget(['enableFlash' => true]) ?>

</div>
