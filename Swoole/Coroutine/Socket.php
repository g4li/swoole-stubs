<?php

namespace Swoole\Coroutine;

/**
 * @property-read $errCode
 * @link
 * https://github.com/swoole/swoole-wiki/blob/master/doc/3.7%20-%20Coroutine%EF%BC%8FSocket.md
 */
class Socket
{

    public function __construct(int $domain, int $type, int $protocol)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.7.2%20-%20Coroutine%EF%BC%8FSocket-%3Ebind.md
     */
    public function bind(string $address, int $port = 0)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.7.3%20-%20Coroutine%EF%BC%8FSocket-%3Elisten.md
     */
    public function listen(int $backlog = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.7.4%20-%20Coroutine%EF%BC%8FSocket-%3Eaccept.md
     */
    public function accept(float $timeout = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.7.5%20-%20Coroutine%EF%BC%8FSocket-%3Econnect.md
     */
    public function connect(string $host, int $port = 0, float $timeout = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.7.7%20-%20Coroutine%EF%BC%8FSocket-%3Erecv.md
     */
    public function recv(int $length = null, float $timeout = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.7.6%20-%20Coroutine%EF%BC%8FSocket-%3Esend.md
     */
    public function send(string $data, float $timeout = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.7.9%20-%20Coroutine%EF%BC%8FSocket-%3Erecvfrom.md
     */
    public function recvfrom(&$peername, float $timeout = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.7.8%20-%20Coroutine%EF%BC%8FSocket-%3Esendto.md
     */
    public function sendto(string $addr, int $port, string $data)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.7.11%20-%20Coroutine%EF%BC%8FSocket-%3Egetpeername.md
     */
    public function getpeername()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.7.10%20-%20Coroutine%EF%BC%8FSocket-%3Egetsockname.md
     */
    public function getsockname()
    {
    }

    public function getSocket()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.7.12%20-%20Coroutine%EF%BC%8FSocket-%3Eclose.md
     */
    public function close()
    {
    }


}

