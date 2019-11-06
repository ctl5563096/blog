<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use EasyWeChat\Factory;

class TestController extends Controller
{
	public function actionTest()
	{
		$config = [
    			'app_id' => 'wxc439cbfe9ee8140e',
    			'secret' => 'b2bf1b59f797e4c0cea4c44b4bfe81f9',
			'token' => 'chentulin',
    			// 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
    			'response_type' => 'object',

    			//...
		];
		$app = Factory::officialAccount($config);
   		#$app->server->push(function ($message) {
                        #return "您好！欢迎使用 EasyWeChat!";
               # });

		#$res = $app->server->serve();
		$ip = $app->base->getValidIps();
var_dump($ip);die;
		$res->send();exit;	
	}
}
