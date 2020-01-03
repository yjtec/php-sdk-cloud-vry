<?php
require __DIR__ . '/../vendor/autoload.php';
use YjtecCloud\Client\YjtecCloud;

// $result = YjtecCloud::rpc()
//     ->product('scenter')
//     ->action('getLoginUser')
//     ->options(['phone','13072419652'])
//     ->request();
// // $result = YjtecCloud::http()
// //     ->product('cas')
// //     ->action('getByName')
// //     ->request();
// //     
// // $result = YjtecCloud::http()
// //         ->product('cas')
// //         ->action('/api/cas/refresh')
// //         ->options(['GfkOwSwgzYrwjH9Z9OrIea9CpVufgspw'])
// //         ->method('post')
// //         ->request();
// var_dump($result);
$result = YjtecCloud::rpc()
    ->product('editapi')
    ->action('project')
    ->options([['user_id'=>116]])
    ->request();
var_dump($result);
