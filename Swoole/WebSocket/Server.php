<?php

namespace Swoole\WebSocket;

/**
 * @link
 * https://github.com/swoole/swoole-wiki/blob/master/doc/8%20-%20WebSocket%EF%BC%8FServer.md
 */
class Server extends \Swoole\Http\Server
{

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/8.2.1%20-%20WebSocket%EF%BC%8FServer-%3Epush.md
     */
    public function push(int $fd, $data, int $opcode = WEBSOCKET_OPCODE_TEXT, bool $finish = true)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/8.2.5%20-%20WebSocket%EF%BC%8FServer-%3Edisconnect.md
     */
    public function disconnect(int $fd, int $code = WEBSOCKET_CLOSE_NORMAL, string $reason = '')
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/8.2.2%20-%20WebSocket%EF%BC%8FServer-%3Eexist.md
     */
    public function exist(int $fd)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/8.2.6%20-%20WebSocket%EF%BC%8FServer-%3EisEstablished.md
     */
    public function isEstablished(int $fd)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/8.2.3%20-%20WebSocket%EF%BC%8FServer%3A%3Apack.md
     */
    public static function pack($data, int $opcode = WEBSOCKET_OPCODE_TEXT, bool $finish = true, bool $mask = false)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/8.2.4%20-%20WebSocket%EF%BC%8FServer%3A%3Aunpack.md
     */
    public static function unpack(string $data)
    {
    }


}

