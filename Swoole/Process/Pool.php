<?php

namespace Swoole\Process;

/**
 * @link
 * https://github.com/swoole/swoole-wiki/blob/master/doc/11%20-%20Process%EF%BC%8FPool.md
 */
class Pool
{

    public function __construct($worker_num, $ipc_type = null, $msgqueue_key = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/11.2%20-%20Process%EF%BC%8FPool-%3Eon.md
     */
    public function on(string $event_name, $callback)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/11.6%20-%20Process%EF%BC%8FPool-%3EgetProcess.md
     */
    public function getProcess()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/11.3%20-%20Process%EF%BC%8FPool-%3Elisten.md
     */
    public function listen(string $host, int $port = null, int $backlog = 2048)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/11.4%20-%20Process%EF%BC%8FPool-%3Ewrite.md
     */
    public function write(string $data)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/11.5%20-%20Process%EF%BC%8FPool-%3Estart.md
     */
    public function start()
    {
    }


}

