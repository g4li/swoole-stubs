<?php

namespace Swoole;

/**
 * @property-read $pipe
 * @property-read $callback
 * @property-read $msgQueueId
 * @property-read $msgQueueKey
 * @property-read $pid
 * @property-read $id
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10%20-%20Process.md
 */
class Process
{

    const IPC_NOWAIT = 256;

    const PIPE_MASTER = 1;

    const PIPE_WORKER = 2;

    const PIPE_READ = 3;

    const PIPE_WRITE = 4;

    public function __construct($callback, $redirect_stdin_and_stdout = null, $pipe_type = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.17%20-%20Process%3A%3Await.md
     */
    public static function wait(bool $blocking = true)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.19%20-%20Process%3A%3Asignal.md
     */
    public static function signal(int $signal_no, $callback)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.20%20-%20Process%3A%3Aalarm.md
     */
    public static function alarm(int $usec, int $type = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.16%20-%20Process%3A%3Akill.md
     */
    public static function kill(int $pid, int $signal_no = SIGTERM)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.18%20-%20Process%3A%3Adaemon.md
     */
    public static function daemon(bool $nochdir = true, bool $noclose = true)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.21%20-%20Process%3A%3AsetAffinity.md
     */
    public static function setaffinity(array $cpu_settings)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.7%20-%20Process-%3EsetTimeout.md
     */
    public function setTimeout(float $seconds)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.8%20-%20Process-%3EsetBlocking.md
     */
    public function setBlocking(bool $blocking)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.9%20-%20Process-%3EuseQueue.md
     */
    public function useQueue(int $key = 0, int $mode = 2, int $capacity = -1)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.10%20-%20Process-%3EstatQueue.md
     */
    public function statQueue()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.11%20-%20Process-%3EfreeQueue.md
     */
    public function freeQueue()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.2%20-%20Process-%3Estart.md
     */
    public function start()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.5%20-%20Process-%3Ewrite.md
     */
    public function write(string $data)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.14%20-%20Process-%3Eclose.md
     */
    public function close(int $which = 0)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.6%20-%20Process-%3Eread.md
     */
    public function read(int $size = 8192)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.12%20-%20Process-%3Epush.md
     */
    public function push(string $data)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.13%20-%20Process-%3Epop.md
     */
    public function pop(int $size = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.15%20-%20Process-%3Eexit.md
     */
    public function exit(int $exit_code = 0)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.4%20-%20Process-%3Eexec.md
     */
    public function exec(string $exec_file, array $args)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/10.3%20-%20Process-%3Ename.md
     */
    public function name($process_name)
    {
        return call_user_func_array("swoole_set_process_name", func_get_args());
    }


}

