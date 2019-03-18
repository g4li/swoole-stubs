<?php

namespace Swoole\Server;

/**
 * @property-read $onConnect
 * @property-read $onReceive
 * @property-read $onClose
 * @property-read $onPacket
 * @property-read $onBufferFull
 * @property-read $onBufferEmpty
 * @property-read $onRequest
 * @property-read $onHandShake
 * @property-read $onMessage
 * @property-read $onOpen
 * @property-read $host
 * @property-read $port
 * @property-read $type
 * @property-read $sock
 * @property-read $setting
 * @property-read $connections
 */
class Port
{

    private function __construct()
    {
    }

    public function set(array $settings)
    {
    }

    public function on(string $event_name, $callback)
    {
    }

    public function getSocket()
    {
    }


}

