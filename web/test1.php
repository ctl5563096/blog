<?php
use EasyWeChat\Factory;

$config = [
    'app_id' => 'wxc439cbfe9ee8140e',
    'secret' => 'b2bf1b59f797e4c0cea4c44b4bfe81f9',

    // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
    'response_type' => 'array',

    //...
];

$app = Factory::officialAccount($config);
var_dump($app);
