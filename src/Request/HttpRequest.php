<?php
namespace YjtecCloud\Client\Request;

class HttpRequest extends Request
{
    protected function response()
    {

        $action  = $this->action;
        $client  = $this->createClient($this);
        $options = $this->options;
        try {
            if (!empty($this->prefix)) {
                return $client->{$this->prefix}->$action(...$options);
            }
            return $client->$action(...$options);
        } catch (\Exception $exception) {
            //var_dump($exception);
        }
    }
}
