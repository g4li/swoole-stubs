<?php

namespace Swoole;

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/5%20-%20Timer.md
 */
class Timer
{

    public static function tick($ms, $callback)
    {
        return call_user_func_array("swoole_timer_tick", func_get_args());
    }

    public static function after($ms, $callback, $param = null)
    {
        return call_user_func_array("swoole_timer_after", func_get_args());
    }

    public static function exists($timer_id)
    {
        return call_user_func_array("swoole_timer_exists", func_get_args());
    }

    public static function clear($timer_id)
    {
        return call_user_func_array("swoole_timer_clear", func_get_args());
    }


}

