<?php

namespace Swoole;

/**
 * @property-read $onConnect
 * @property-read $onClose
 * @property-read $onMessage
 * @property-read $setting
 * @property-read $host
 * @property-read $port
 * @property-read $sock
 * @property-read $errCode
 * @property-read $errMsg
 */
class Redis
{

    const STATE_CONNECT = 0;

    const STATE_READY = 1;

    const STATE_WAIT_RESULT = 2;

    const STATE_SUBSCRIBE = 3;

    const STATE_CLOSED = 4;

    public function __construct(?array $setting = null)
    {
    }

    public function on(string $event_name, $callback)
    {
    }

    public function connect(string $host, int $port, $callback)
    {
    }

    public function close()
    {
    }

    public function getState()
    {
    }

    public function __call(string $command, $params)
    {
    }


}

