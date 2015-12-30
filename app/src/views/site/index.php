<?php
/* @var $this yii\web\View */
$this->title .= 'Home';
?>

<?php

$client = new \Github\Client(new \Github\HttpClient\CachedHttpClient(['cache_dir' => '/app/runtime/github-api-cache']));
$release = $client->api('repo')->releases()->latest('phundament', 'app');

?>

<header>
    <div class="jumbotron">
        <div class="container">
            <h1>Phundament <i>nano</i></h1>
            <h2>You will like it.</h2>

            <div>
                <?= \yii\helpers\Html::a(
                    "Download ({$release['tag_name']})",
                    $release['zipball_url'],
                    ['class' => 'btn btn-default btn-lg']
                ) ?>
                <a href="/docs" class="btn btn-default btn-lg">Docs</a>
            </div>
        </div>
    </div>
</header>

<div class="site-index">

    <?= \app\modules\prototype\widgets\HtmlWidget::widget(['enableFlash' => true]) ?>

</div>
