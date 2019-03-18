<?php

namespace Swoole;

/**
 * @property-read $serverInfo
 * @property-read $sock
 * @property-read $connected
 * @property-read $errno
 * @property-read $connect_errno
 * @property-read $error
 * @property-read $connect_error
 * @property-read $insert_id
 * @property-read $affected_rows
 * @property-read $onConnect
 * @property-read $onClose
 */
class MySQL
{

    const STATE_QUERY = 0;

    const STATE_READ_START = 1;

    const STATE_READ_FIELD  = 2;

    const STATE_READ_ROW = 3;

    const STATE_READ_END = 5;

    const STATE_CLOSED = 6;

    public function __construct()
    {
    }

    public function connect(array $server_config, $callback)
    {
    }

    public function begin($callback)
    {
    }

    public function commit($callback)
    {
    }

    public function rollback($callback)
    {
    }

    public function query(string $sql, $callback)
    {
    }

    public function close()
    {
    }

    public function getState(string $str, int $flags)
    {
    }

    public function on(string $event_name, $callback)
    {
    }


}

