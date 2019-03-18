<?php

namespace Swoole\Redis;

/**
 * @link
 * https://github.com/swoole/swoole-wiki/blob/master/doc/9%20-%20Redis%EF%BC%8FServer.md
 */
class Server extends \Swoole\Server
{

    const NIL = 1;

    const ERROR = 0;

    const STATUS = 2;

    const INT = 3;

    const STRING = 4;

    const SET = 5;

    const MAP = 6;

    public function start()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/9.1.1%20-%20Redis%EF%BC%8FServer-%3EsetHandler.md
     */
    public function setHandler(string $command, $callback, $number_of_string_param = null, $type_of_array_param = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/9.1.2%20-%20Redis%EF%BC%8FServer%3A%3Aformat.md
     */
    public static function format(int $type, $value = null)
    {
    }


}

