<?php

namespace Swoole\WebSocket;

/**
 * @property-read $fd
 * @property-read $data
 * @property-read $opcode
 * @property-read $finish
 * @link
 * https://github.com/swoole/swoole-wiki/blob/master/doc/8.6%20-%20WebSocket%EF%BC%8FFrame.md
 */
class Frame
{

    public function __toString()
    {
    }

    public static function pack($data, $opcode = null, $finish = null, $mask = null)
    {
    }

    public static function unpack($data)
    {
    }


}

