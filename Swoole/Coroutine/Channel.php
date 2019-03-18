<?php

namespace Swoole\Coroutine;

/**
 * @property-read $capacity
 * @property-read $errCode
 * @link
 * https://github.com/swoole/swoole-wiki/blob/master/doc/3.2%20-%20Coroutine%EF%BC%8FChannel.md
 */
class Channel
{

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.2.1%20-%20Coroutine%EF%BC%8FChannel-%3E__construct.md
     */
    public function __construct(int $size = 1)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.2.2%20-%20Coroutine%EF%BC%8FChannel-%3Epush.md
     */
    public function push($data, float $timeout = -1)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.2.3%20-%20Coroutine%EF%BC%8FChannel-%3Epop.md
     */
    public function pop(float $timeout = -1)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.2.7%20-%20Coroutine%EF%BC%8FChannel-%3EisEmpty.md
     */
    public function isEmpty()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.2.8%20-%20Coroutine%EF%BC%8FChannel-%3EisFull.md
     */
    public function isFull()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.2.5%20-%20Coroutine%EF%BC%8FChannel-%3Eclose.md
     */
    public function close()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.2.4%20-%20Coroutine%EF%BC%8FChannel-%3Estats.md
     */
    public function stats()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.2.6%20-%20Coroutine%EF%BC%8FChannel-%3Elength.md
     */
    public function length()
    {
    }


}

