<?php

namespace Swoole\Coroutine\Http;

/**
 * @property-read $errCode
 * @property-read $errMsg
 * @property-read $connected
 * @property-read $host
 * @property-read $port
 * @property-read $ssl
 * @property-read $setting
 * @property-read $requestMethod
 * @property-read $requestHeaders
 * @property-read $requestBody
 * @property-read $uploadFiles
 * @property-read $downloadFile
 * @property-read $downloadOffset
 * @property-read $statusCode
 * @property-read $headers
 * @property-read $set_cookie_headers
 * @property-read $cookies
 * @property-read $body
 * @link
 * https://github.com/swoole/swoole-wiki/blob/master/doc/3.4%20-%20Coroutine%EF%BC%8FHttp%EF%BC%8FClient.md
 */
class Client
{

    public function __construct(string $host, int $port = 80, bool $ssl = false)
    {
    }

    public function set(array $settings)
    {
    }

    public function getDefer()
    {
    }

    public function setDefer(bool $defer = true)
    {
    }

    public function setMethod($method)
    {
    }

    public function setHeaders(array $headers)
    {
    }

    public function setCookies(array $cookies)
    {
    }

    public function setData(string $data)
    {
    }

    public function execute(string $path)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.4.2%20-%20Coroutine%EF%BC%8FHttp%EF%BC%8FClient-%3Eget.md
     */
    public function get(string $path)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.4.3%20-%20Coroutine%EF%BC%8FHttp%EF%BC%8FClient-%3Epost.md
     */
    public function post(string $path, $data)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.4.9%20-%20Coroutine%EF%BC%8FHttp%EF%BC%8FClient-%3Edownload.md
     */
    public function download(string $path, $file, int $offset = 0)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.4.4%20-%20Coroutine%EF%BC%8FHttp%EF%BC%8FClient-%3Eupgrade.md
     */
    public function upgrade(string $path)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.4.7%20-%20Coroutine%EF%BC%8FHttp%EF%BC%8FClient-%3EaddFile.md
     */
    public function addFile(string $path, string $name, string $type = '', string $filename = '', int $offset = 0, int $length = 0)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.4.8%20-%20Coroutine%EF%BC%8FHttp%EF%BC%8FClient-%3EaddData.md
     */
    public function addData(string $path, string $name, string $type = '', string $filename = '')
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.4.6%20-%20Coroutine%EF%BC%8FHttp%EF%BC%8FClient-%3Erecv.md
     */
    public function recv(float $timeout = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.4.5%20-%20Coroutine%EF%BC%8FHttp%EF%BC%8FClient-%3Epush.md
     */
    public function push($data, int $opcode = WEBSOCKET_OPCODE_TEXT, bool $finish = true)
    {
    }

    public function close()
    {
    }


}

