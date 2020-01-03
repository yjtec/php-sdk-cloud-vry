<?php 
namespace YjtecCloud\Client\Traits;
use YjtecCloud\Client\Request\RpcRequest;
use YjtecCloud\Client\Request\HttpRequest;
Trait RequestTrait{
    static private $rpcinstance;
    public static function rpc(){
        if(!self::$rpcinstance instanceof RpcRequest){
            self::$rpcinstance = new RpcRequest();
        }
        return self::$rpcinstance;
    }

    public static function http(){
        return new HttpRequest();
    }
}
?>