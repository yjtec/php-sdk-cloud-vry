<?php
namespace YjtecCloud\Client\Request;
use Hprose\Socket\Client;
use YjtecCloud\Client\Traits\DetectsLostConnections;
class RpcRequest extends Request
{
    use DetectsLostConnections;
/**
 * @throws ClientException
 * @throws Exception
 */
    private $clients;
    private $tryAgainTimes = 2 ;
    private $tryAgainStmp = 0;
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
        } catch (\Exception $e) {
            return $this->tryAgain($e);
        }
    }

    public function createClient(Request $request)
    {
        if(
            isset($this->clients[md5($request->config['uri'])]) && 
            $this->clients[md5($request->config['uri'])] 
        ){
            return $this->clients[md5($request->config['uri'])];
            
        }else{
            $client =  new Client($request->config['uri'], false);
            $this->clients[md5($request->config['uri'])] = $client;
            return $client;
        }
    }

    public function tryAgain(\Exception $e){
        if($this->causedByLostConnection($e) && $this->tryAgainStmp < $this->tryAgainTimes ){
            $this->tryAgainStmp ++;
            return $this->response();
        }else{
            throw $e;
        }
    }
}
