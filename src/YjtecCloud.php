<?php
namespace YjtecCloud\Client;
use YjtecCloud\Client\Traits\RequestTrait;
class YjtecCloud
{
    use RequestTrait;
    public static function __callStatic($func, $arguments)
    {
        echo $func;exit;
    }
}
