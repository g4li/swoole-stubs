<?php

namespace Swoole;

/**
 *
 */
class Async
{

    public static function read($filename, $callback, $chunk_size = null, $offset = null)
    {
        return call_user_func_array("swoole_async_read", func_get_args());
    }

    public static function write($filename, $content, $offset = null, $callback = null)
    {
        return call_user_func_array("swoole_async_write", func_get_args());
    }

    public static function readFile($filename, $callback)
    {
        return call_user_func_array("swoole_async_readfile", func_get_args());
    }

    public static function writeFile($filename, $content, $callback = null, $flags = null)
    {
        return call_user_func_array("swoole_async_writefile", func_get_args());
    }

    public static function dnsLookup($hostname, $callback)
    {
        return call_user_func_array("swoole_async_dns_lookup", func_get_args());
    }

    public static function dnsLookupCoro($domain_name, $timeout = null)
    {
        return call_user_func_array("swoole_async_dns_lookup_coro", func_get_args());
    }

    public static function set(array $settings)
    {
        return call_user_func_array("swoole_async_set", func_get_args());
    }

    public static function exec(string $command, $callback)
    {
    }


}

