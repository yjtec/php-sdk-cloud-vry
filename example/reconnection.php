<?php
require __DIR__ . '/../vendor/autoload.php';
use YjtecCloud\Client\YjtecCloud;
//Error while sending STMT_PREPARE packet. PID=941
$result = YjtecCloud::rpc()
        ->product('ucenter')
        ->action('getLoginUser')
        ->options(['code',['13373944332']])
        ->request();
var_dump($result);
