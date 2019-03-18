<?php

namespace Swoole;

/**
 * @property-read $errCode
 * @property-read $sock
 * @property-read $reuse
 * @property-read $reuseCount
 * @property-read $type
 * @property-read $id
 * @property-read $setting
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12%20-%20Client.md
 */
class Client
{

    const MSG_OOB = 1;

    const MSG_PEEK = 2;

    const MSG_DONTWAIT = 64;

    const MSG_WAITALL = 256;

    const SHUT_RDWR = 2;

    const SHUT_RD = 0;

    const SHUT_WR = 1;

    public function __construct(int $type, int $async = 0, string $id = '')
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.2%20-%20swoole_client-%3Eset.md
     */
    public function set(array $settings)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.4%20-%20swoole_client-%3Econnect.md
     */
    public function connect(string $host, int $port = 0, float $timeout = null, int $sock_flag = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.13%20-%20swoole_client-%3Erecv.md
     */
    public function recv(int $size = null, int $flag = 0)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.10%20-%20swoole_client-%3Esend.md
     */
    public function send(string $data, int $flag = 0)
    {
    }

    public function pipe($dst_socket)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.12%20-%20swoole_client-%3Esendfile.md
     */
    public function sendfile(string $filename, int $offset = 0, int $length = 0)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.11%20-%20swoole_client-%3Esendto.md
     */
    public function sendto(string $ip, int $port, string $data)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.15%20-%20swoole_client-%3Esleep.md
     */
    public function sleep()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.16%20-%20swoole_client-%3Ewakeup.md
     */
    public function wakeup()
    {
    }

    public function pause()
    {
        return call_user_func_array([$this, "sleep"], func_get_args());
    }

    public function resume()
    {
        return call_user_func_array([$this, "wakeup"], func_get_args());
    }

    public function shutdown(int $how)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.17%20-%20swoole_client-%3EenableSSL.md
     */
    public function enableSSL($callback = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.9%20-%20swoole_client-%3EgetPeerCert.md
     */
    public function getPeerCert()
    {
    }

    public function verifyPeerCert(bool $allow_self_signed = false)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.5%20-%20swoole_client-%3EisConnected.md
     */
    public function isConnected()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.7%20-%20swoole_client-%3EgetSockName.md
     */
    public function getsockname()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.8%20-%20swoole_client-%3EgetPeerName.md
     */
    public function getpeername()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.14%20-%20swoole_client-%3Eclose.md
     */
    public function close(bool $force = false)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.3%20-%20swoole_client-%3Eon.md
     */
    public function on(string $event_name, $callback)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.1.6%20-%20swoole_client-%3EgetSocket.md
     */
    public function getSocket()
    {
    }


}

