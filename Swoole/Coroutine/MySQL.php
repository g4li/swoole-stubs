<?php

namespace Swoole\Coroutine;

/**
 * @property-read $serverInfo
 * @property-read $sock
 * @property-read $connected
 * @property-read $connect_error
 * @property-read $connect_errno
 * @property-read $affected_rows
 * @property-read $insert_id
 * @property-read $error
 * @property-read $errno
 * @link
 * https://github.com/swoole/swoole-wiki/blob/master/doc/3.8%20-%20Coroutine%EF%BC%8FMySQL.md
 */
class MySQL
{

    public function __construct()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.8.2%20-%20Coroutine%EF%BC%8FMySQL-%3Econnect.md
     */
    public function connect(array $server_config)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.8.3%20-%20Coroutine%EF%BC%8FMySQL-%3Equery.md
     */
    public function query(string $sql, float $timeout = null)
    {
    }

    public function recv()
    {
    }

    public function nextResult()
    {
    }

    public function begin($timeout = null)
    {
    }

    public function commit($timeout = null)
    {
    }

    public function rollback($timeout = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.8.4%20-%20Coroutine%EF%BC%8FMySQL-%3Eprepare.md
     */
    public function prepare(string $query, float $timeout = null)
    {
    }

    public function setDefer(bool $defer = true)
    {
    }

    public function getDefer()
    {
    }

    public function close()
    {
    }


}

