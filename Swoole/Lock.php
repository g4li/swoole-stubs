<?php

namespace Swoole;

/**
 * @property-read $errCode
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.1%20-%20Lock.md
 */
class Lock
{

    const FILELOCK = 2;

    const MUTEX = 3;

    const SEM = 4;

    const RWLOCK = 1;

    const SPINLOCK = 5;

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.1.1%20-%20swoole_lock-%3E__construct.md
     */
    public function __construct(int $type = SWOOLE_MUTEX, string $filename = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.1.2%20-%20swoole_lock-%3Elock.md
     */
    public function lock()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.1.7%20-%20swoole_lock-%3Elockwait.md
     */
    public function lockwait(float $timeout = 1)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.1.3%20-%20swoole_lock-%3Etrylock.md
     */
    public function trylock()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.1.5%20-%20swoole_lock-%3Elock_read.md
     */
    public function lock_read()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.1.6%20-%20swoole_lock-%3Etrylock_read.md
     */
    public function trylock_read()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.1.4%20-%20swoole_lock-%3Eunlock.md
     */
    public function unlock()
    {
    }

    public function destroy()
    {
    }


}

