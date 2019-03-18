<?php

namespace Swoole;

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3%20-%20Coroutine.md
 */
class Coroutine
{

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.2%20-%20Coroutine%3A%3Acreate.md
     */
    public static function create($func, ... $params)
    {
        return call_user_func_array("swoole_coroutine_create", func_get_args());
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.12%20-%20Coroutine%3A%3Aexec.md
     */
    public static function exec($command)
    {
        return call_user_func_array("swoole_coroutine_exec", func_get_args());
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.10%20-%20Coroutine%3A%3Agethostbyname.md
     */
    public static function gethostbyname($domain_name, $family = null)
    {
        return call_user_func_array("swoole_coroutine_gethostbyname", func_get_args());
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.5%20-%20Coroutine%3A%3Adefer.md
     */
    public static function defer($callback)
    {
        return call_user_func_array("swoole_coroutine_defer", func_get_args());
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.19%20-%20Coroutine%3A%3Aset.md
     */
    public static function set($options)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.3%20-%20Coroutine%3A%3Ayield.md
     */
    public static function yield()
    {
    }

    public static function suspend()
    {
        return call_user_func_array([$this, "yield"], func_get_args());
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.4%20-%20Coroutine%3A%3Aresume.md
     */
    public static function resume(int $uid)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.15%20-%20Coroutine%3A%3Astats.md
     */
    public static function stats()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.1%20-%20Coroutine%3A%3AgetCid.md
     */
    public static function getCid()
    {
    }

    public static function getuid()
    {
        return call_user_func_array([$this, "getCid"], func_get_args());
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.9%20-%20Coroutine%3A%3Asleep.md
     */
    public static function sleep(float $seconds)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.6%20-%20Coroutine%3A%3Afread.md
     */
    public static function fread($handle, int $length = 0)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.7%20-%20Coroutine%3A%3Afgets.md
     */
    public static function fgets($handle)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.8%20-%20Coroutine%3A%3Afwrite.md
     */
    public static function fwrite($handle, string $string, int $length = 0)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.13%20-%20Coroutine%3A%3AreadFile.md
     */
    public static function readFile(string $filename, int $flags = 0)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.14%20-%20Coroutine%3A%3AwriteFile.md
     */
    public static function writeFile(string $filename, string $data, int $flags = 0)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.11%20-%20Coroutine%3A%3Agetaddrinfo.md
     */
    public static function getaddrinfo($hostname, $family = null, $socktype = null, $protocol = null, $service = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.16%20-%20Coroutine%3A%3Astatvfs.md
     */
    public static function statvfs(string $path)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.17%20-%20Coroutine%3A%3AgetBackTrace.md
     */
    public static function getBackTrace(int $cid, $options = null, $limit = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.1.18%20-%20Coroutine%3A%3AlistCoroutines.md
     */
    public static function listCoroutines()
    {
    }


}

