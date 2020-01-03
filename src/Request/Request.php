<?php
namespace YjtecCloud\Client\Request;



use YjtecCloud\Client\Config\Config;

class Request
{
    protected $uri;
    protected $prefix = '';
    protected $options = [];
    public function product($product){
        $this->product = $product;
        $this->config = Config::get($product);
        return $this;
    }

    public function action($action){
        $this->action = $action;
        return $this;
    }

    public function options($options){
        $this->options = $options;
        return $this;
    }

    public function prefix($prefix){
        $this->prefix = $prefix;
        return $this;
    }

    public function request()
    {
        $result = $this->response();

        return $result;
    }

    
}
