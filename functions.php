<?php

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/16.1.2%20-%20swoole_version.md
 */
function swoole_version()
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/16.1.8%20-%20swoole_cpu_num.md
 */
function swoole_cpu_num()
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/16.1.9%20-%20swoole_last_error.md
 */
function swoole_last_error()
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/13.1%20-%20swoole_event_add.md
 */
function swoole_event_add($fd, $read_callback, $write_callback = null, int $events = 0)
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/13.2%20-%20swoole_event_set.md
 */
function swoole_event_set($fd, $read_callback = null, $write_callback = null, int $events = 0)
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/13.5%20-%20swoole_event_del.md
 */
function swoole_event_del($fd)
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/13.6%20-%20swoole_event_exit.md
 */
function swoole_event_exit()
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/13.9%20-%20swoole_event_wait.md
 */
function swoole_event_wait()
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/13.4%20-%20swoole_event_write.md
 */
function swoole_event_write($fd, string $data)
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/13.7%20-%20swoole_event_defer.md
 */
function swoole_event_defer($callback)
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/13.8%20-%20swoole_event_cycle.md
 */
function swoole_event_cycle($callback, bool $before = false)
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/13.10%20-%20swoole_event_dispatch.md
 */
function swoole_event_dispatch()
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/13.3%20-%20swoole_event_isset.md
 */
function swoole_event_isset($fd, int $events = null)
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/5.2%20-%20swoole_timer_after.md
 */
function swoole_timer_after(int $ms, $callback, $param = null)
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/5.1%20-%20swoole_timer_tick.md
 */
function swoole_timer_tick(int $ms, $callback, $param)
{
}

function swoole_timer_exists(int $timer_id)
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/5.3%20-%20swoole_timer_clear.md
 */
function swoole_timer_clear(int $timer_id)
{
}

function swoole_async_set(array $settings)
{
}

function swoole_async_read($filename, $callback, int $chunk_size = null, int $offset = 0)
{
}

function swoole_async_write($filename, string $content, int $offset = -1, $callback = null)
{
}

function swoole_async_readfile($filename, $callback)
{
}

function swoole_async_writefile($filename, string $content, $callback = null, int $flags = 0)
{
}

function swoole_async_dns_lookup($hostname, $callback)
{
}

function swoole_async_dns_lookup_coro($domain_name, float $timeout = null)
{
}

function swoole_coroutine_create(string $func, int $family = AF_INET)
{
}

function swoole_coroutine_exec(string $command, bool $get_error_stream = false)
{
}

function swoole_coroutine_defer(float $callback)
{
}

function go($func)
{
}

function defer($callback)
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/12.4.1%20-%20swoole_client_select.md
 */
function swoole_client_select(array &$read_array, array &$write_array, array &$error_array, float $timeout = null)
{
}

function swoole_select(&$read_array, &$write_array, &$error_array, $timeout = null)
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/16.1.1%20-%20swoole_set_process_name.md
 */
function swoole_set_process_name($process_name, int $size = 128)
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/16.1.5%20-%20swoole_get_local_ip.md
 */
function swoole_get_local_ip()
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/16.1.7%20-%20swoole_get_local_mac.md
 */
function swoole_get_local_mac()
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/16.1.3%20-%20swoole_strerror.md
 */
function swoole_strerror(int $errno, int $error_type = 0)
{
}

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/16.1.4%20-%20swoole_errno.md
 */
function swoole_errno()
{
}

function swoole_hashcode(string $data, int $type = 0)
{
}

function swoole_get_mime_type(string $filename)
{
}

function swoole_call_user_shutdown_begin()
{
}

