<?php
namespace YjtecCloud\Client\Config;

class Config {
    public static function get($key){
        $data = require __DIR__.'/Data.php';
        if(array_key_exists($key, $data)){
            return $data[$key];
        }else{
            throw new \Exception("$key Config not exits");
        }
    }
}