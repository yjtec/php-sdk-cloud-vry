<?php
require __DIR__ . '/../vendor/autoload.php';
use YjtecCloud\Client\YjtecCloud;
//Error while sending STMT_PREPARE packet. PID=941
$result = null;
try{
$result = YjtecCloud::rpc()
        ->product('acenter')
        ->action('test')
        ->options(['asdfa'])
        ->request();
}catch(\Exception $e){
    echo $e->getMessage();
}
var_dump($result);
