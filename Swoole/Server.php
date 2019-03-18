<?php

namespace Swoole;

/**
 * @property-read $setting
 * @property-read $connections
 * @property-read $host
 * @property-read $port
 * @property-read $type
 * @property-read $mode
 * @property-read $ports
 * @property-read $master_pid
 * @property-read $manager_pid
 * @property-read $worker_id
 * @property-read $taskworker
 * @property-read $worker_pid
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2%20-%20Server.md
 */
class Server
{

    public function __construct(string $host, int $port = 0, int $mode = SWOOLE_PROCESS, int $sock_type = SWOOLE_SOCK_TCP)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.6%20-%20Server-%3Elisten.md
     */
    public function listen(string $host, int $port, int $sock_type)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.4%20-%20Server-%3EaddListener.md
     */
    public function addlistener($host, $port, $sock_type)
    {
        return call_user_func_array([$this, "listen"], func_get_args());
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.3%20-%20Server-%3Eon.md
     */
    public function on($event_name, $callback)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.2%20-%20Server-%3Eset.md
     */
    public function set(array $settings)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.7%20-%20Server-%3Estart.md
     */
    public function start()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.16%20-%20Server-%3Esend.md
     */
    public function send($fd, $send_data, int $server_socket = -1)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.18%20-%20Server-%3Esendto.md
     */
    public function sendto(string $ip, int $port, string $send_data, int $server_socket = -1)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.19%20-%20Server-%3Esendwait.md
     */
    public function sendwait(int $conn_fd, $send_data)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.21%20-%20Server-%3Eexist.md
     */
    public function exist(int $fd)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.36%20-%20Server-%3Eprotect.md
     */
    public function protect($fd, $is_protected = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.17%20-%20Server-%3Esendfile.md
     */
    public function sendfile(int $conn_fd, string $filename, int $offset = 0, int $length = 0)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.15%20-%20Server-%3Eclose.md
     */
    public function close(int $fd, bool $reset = FALSE)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.37%20-%20Server-%3Econfirm.md
     */
    public function confirm(int $fd)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.22%20-%20Server-%3Epause.md
     */
    public function pause(int $fd)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.23%20-%20Server-%3Eresume.md
     */
    public function resume(int $fd)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.28%20-%20Server-%3Etask.md
     */
    public function task($data, int $worker_id = -1, $finish_callback = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.29%20-%20Server-%3Etaskwait.md
     */
    public function taskwait($data, float $timeout = null, int $worker_id = -1)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.30%20-%20Server-%3EtaskWaitMulti.md
     */
    public function taskWaitMulti(array $tasks, float $timeout = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.31%20-%20Server-%3EtaskCo.md
     */
    public function taskCo(array $tasks, float $timeout = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.32%20-%20Server-%3Efinish.md
     */
    public function finish($data)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.8%20-%20Server-%3Ereload.md
     */
    public function reload(bool $only_reload_taskworker = false)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.10%20-%20Server-%3Eshutdown.md
     */
    public function shutdown()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.9%20-%20Server-%3Estop.md
     */
    public function stop(int $worker_id = null, bool $wait_reactor = false)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.34%20-%20Server-%3EgetLastError.md
     */
    public function getLastError()
    {
        return call_user_func_array("swoole_last_error", func_get_args());
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.33%20-%20Server-%3Eheartbeat.md
     */
    public function heartbeat(bool $reactor_id)
    {
    }

    public function connection_info($fd, int $reactor_id = -1, bool $noCheckConnection = false)
    {
    }

    public function connection_list(int $start_fd, int $find_count = 10)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.24%20-%20Server-%3EgetClientInfo.md
     */
    public function getClientInfo($fd, $reactor_id = null)
    {
        return call_user_func_array([$this, "connection_info"], func_get_args());
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.25%20-%20Server-%3EgetClientList.md
     */
    public function getClientList($start_fd, $find_count = null)
    {
        return call_user_func_array([$this, "connection_list"], func_get_args());
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.12%20-%20Server-%3Eafter.md
     */
    public function after($ms, $callback, $param = null)
    {
        return call_user_func_array("swoole_timer_after", func_get_args());
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.11%20-%20Server-%3Etick.md
     */
    public function tick($ms, $callback)
    {
        return call_user_func_array("swoole_timer_tick", func_get_args());
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.14%20-%20Server-%3EclearTimer.md
     */
    public function clearTimer($timer_id)
    {
        return call_user_func_array("swoole_timer_clear", func_get_args());
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.13%20-%20Server-%3Edefer.md
     */
    public function defer($callback)
    {
        return call_user_func_array("swoole_event_defer", func_get_args());
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.20%20-%20Server-%3EsendMessage.md
     */
    public function sendMessage($message, int $dst_worker_id)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.5%20-%20Server-%3EaddProcess.md
     */
    public function addProcess(\swoole_process $process)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.27%20-%20Server-%3Estats.md
     */
    public function stats()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.35%20-%20Server-%3EgetSocket.md
     */
    public function getSocket(int $port = 0)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/2.1.26%20-%20Server-%3Ebind.md
     */
    public function bind(int $fd, int $uid)
    {
    }


}

