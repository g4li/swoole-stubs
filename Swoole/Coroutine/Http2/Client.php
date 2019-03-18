<?php

namespace Swoole\Coroutine\Http2;

/**
 * @property-read $errCode
 * @property-read $errMsg
 * @property-read $sock
 * @property-read $type
 * @property-read $setting
 * @property-read $connected
 * @property-read $host
 * @property-read $port
 * @link
 * https://github.com/swoole/swoole-wiki/blob/master/doc/3.5%20-%20Coroutine%EF%BC%8FHttp2%EF%BC%8FClient.md
 */
class Client
{

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.5.1%20-%20Coroutine%EF%BC%8FHttp2%EF%BC%8FClient-%3E__construct.md
     */
    public function __construct($host, $port = null, $ssl = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.5.2%20-%20Coroutine%EF%BC%8FHttp2%EF%BC%8FClient-%3Eset.md
     */
    public function set(array $settings)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.5.3%20-%20Coroutine%EF%BC%8FHttp2%EF%BC%8FClient-%3Econnect.md
     */
    public function connect()
    {
    }

    public function stats($key = null)
    {
    }

    public function isStreamExist($stream_id)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.5.4%20-%20Coroutine%EF%BC%8FHttp2%EF%BC%8FClient-%3Esend.md
     */
    public function send($request)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.5.5%20-%20Coroutine%EF%BC%8FHttp2%EF%BC%8FClient-%3Ewrite.md
     */
    public function write($stream_id, $data, $end_stream = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.5.6%20-%20Coroutine%EF%BC%8FHttp2%EF%BC%8FClient-%3Erecv.md
     */
    public function recv($timeout = null)
    {
    }

    public function goaway($error_code = null, $debug_data = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.5.7%20-%20Coroutine%EF%BC%8FHttp2%EF%BC%8FClient-%3Eclose.md
     */
    public function close()
    {
    }


}

