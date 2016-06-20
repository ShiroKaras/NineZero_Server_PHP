<?php
namespace socket;

use ZPHP\Socket\Callback\SwooleHttp;
use ZPHP\Core\Config as ZConfig;
use ZPHP\Common\Formater;
use ZPHP\Common\Log;
use ZPHP\Protocol;
use ZPHP\Core;
use common\ERROR;
use task\TaskCenter;

class HttpServer extends SwooleHttp
{

    public function onRequest($request, $reponse)
    {
        $content = "";
        do
        {
            $path_info = explode ("/", $request->server['path_info']);
            $ctrl = $path_info[1];
            $method = $path_info[2];
            $reg = ZConfig::get("reg");

            if( !isset($reg[$ctrl]) )
            {
                $content = json_encode( array(
                    "result" => ERROR::ERR_CTRL_NOT_DEFINE_CODE,
                    "resultMsg" => ERROR::ERR_CTRL_NOT_DEFINE_MSG,
                ) );
                break;
            }
            if( !in_array($method,$reg[$ctrl]) )
            {
                $content = json_encode( array(
                    "result" => ERROR::ERR_CTRL_NOT_DEFINE_CODE,
                    "resultMsg" => ERROR::ERR_CTRL_NOT_DEFINE_MSG,
                ) );
                break;
            }

            if( isset($request->post) ){
                Protocol\Request::parse($request->post);
            }

            Protocol\Request::setCtrl($ctrl);
            Protocol\Request::setMethod($method);
            Protocol\Request::setViewMode('Json');
            Protocol\Request::setSocket($this->serv);

            \ob_start();
            Core\Route::route();
            $content = \ob_get_contents();
            \ob_end_clean();
        } while(0);
        $reponse->end($content);
    }

    public function onTask($server, $taskId, $fromId, $data)
    {
        $center = new TaskCenter();
        try {
            $center->parse( $data );
            $result = $center->route( $server );
            $server->finish( $result );
        } catch (\Exception $e) {
            $result =  Formater::exception($e);
            Log::info('debug', [var_export($result, true)]);
            $server->finish( "Error" );
        }
    }

    public function onFinish($server, $taskId, $data)
    {

    }
}