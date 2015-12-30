<?php

namespace app\modules\cms\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $client = new \Github\Client(new \Github\HttpClient\CachedHttpClient(['cache_dir' => '/app/runtime/github-api-cache']));

        $issues = $client->api('issue')->all('phundament', 'app', array('state' => 'open'));

        return $this->render('index', ['issues'=>$issues]);
    }
}
