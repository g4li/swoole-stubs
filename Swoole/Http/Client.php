<?php

namespace Swoole\Http;

/**
 * @property-read $type
 * @property-read $errCode
 * @property-read $errMsg
 * @property-read $statusCode
 * @property-read $host
 * @property-read $port
 * @property-read $ssl
 * @property-read $requestMethod
 * @property-read $requestHeaders
 * @property-read $requestBody
 * @property-read $uploadFiles
 * @property-read $set_cookie_headers
 * @property-read $downloadFile
 * @property-read $headers
 * @property-read $cookies
 * @property-read $body
 * @property-read $onConnect
 * @property-read $onError
 * @property-read $onMessage
 * @property-read $onClose
 */
class Client
{

    public function __construct(string $host, int $port = 80, bool $ssl = FALSE)
    {
    }

    public function set(array $settings)
    {
    }

    public function setMethod(string $method)
    {
    }

    public function setHeaders(array $headers)
    {
    }

    public function setCookies(array $cookies)
    {
    }

    public function setData($data)
    {
    }

    public function addFile($path, $name, $type = null, $filename = null, $offset = null, $length = null)
    {
    }

    public function execute(string $path, $callback)
    {
    }

    public function push($data, int $opcode = WEBSOCKET_OPCODE_TEXT, bool $finish = true)
    {
    }

    public function get(string $path, $callback)
    {
    }

    public function post(string $path, $data, $callback)
    {
    }

    public function upgrade(string $path, $callback)
    {
    }

    public function download(string $path, $file, $callback, int $offset = 0)
    {
    }

    public function isConnected()
    {
    }

    public function close()
    {
    }

    public function on(string $event_name, $callback)
    {
    }


}

