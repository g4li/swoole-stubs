<?php

namespace Swoole\Coroutine;

/**
 * @property-read $errCode
 * @property-read $sock
 * @property-read $type
 * @property-read $setting
 * @property-read $connected
 * @link
 * https://github.com/swoole/swoole-wiki/blob/master/doc/3.3%20-%20Coroutine%EF%BC%8FClient.md
 */
class Client
{

    const MSG_OOB = 1;

    const MSG_PEEK = 2;

    const MSG_DONTWAIT = 64;

    const MSG_WAITALL = 256;

    public function __construct(int $type)
    {
    }

    public function set(array $settings)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.3.1%20-%20Coroutine%EF%BC%8FClient-%3Econnect.md
     */
    public function connect(string $host, int $port = 0, float $timeout = null, int $sock_flag = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.3.3%20-%20Coroutine%EF%BC%8FClient-%3Erecv.md
     */
    public function recv(float $timeout = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.3.5%20-%20Coroutine%EF%BC%8FClient-%3Epeek.md
     */
    public function peek(int $length = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.3.2%20-%20Coroutine%EF%BC%8FClient-%3Esend.md
     */
    public function send(string $data, float $timeout = null)
    {
    }

    public function sendfile(string $filename, int $offset = 0, int $length = 0)
    {
    }

    public function sendto(string $address, int $port, string $data)
    {
    }

    public function recvfrom(int $length, &$address, &$port = null)
    {
    }

    public function enableSSL()
    {
    }

    public function getPeerCert()
    {
    }

    public function verifyPeerCert(bool $allow_self_signed = false)
    {
    }

    public function isConnected()
    {
    }

    public function getsockname()
    {
    }

    public function getpeername()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.3.4%20-%20Coroutine%EF%BC%8FClient-%3Eclose.md
     */
    public function close()
    {
    }

    public function getSocket()
    {
    }


}

