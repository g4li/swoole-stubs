<?php

namespace Swoole;

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/13%20-%20Event.md
 */
class Event
{

    public static function add($fd, $read_callback, $write_callback = null, $events = null)
    {
        return call_user_func_array("swoole_event_add", func_get_args());
    }

    public static function del($fd)
    {
        return call_user_func_array("swoole_event_del", func_get_args());
    }

    public static function set($fd, $read_callback = null, $write_callback = null, $events = null)
    {
        return call_user_func_array("swoole_event_set", func_get_args());
    }

    public static function exit()
    {
        return call_user_func_array("swoole_event_exit", func_get_args());
    }

    public static function write($fd, $data)
    {
        return call_user_func_array("swoole_event_write", func_get_args());
    }

    public static function wait()
    {
        return call_user_func_array("swoole_event_wait", func_get_args());
    }

    public static function defer($callback)
    {
        return call_user_func_array("swoole_event_defer", func_get_args());
    }

    public static function cycle($callback, $before = null)
    {
        return call_user_func_array("swoole_event_cycle", func_get_args());
    }


}

