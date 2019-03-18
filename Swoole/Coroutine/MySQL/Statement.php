<?php

namespace Swoole\Coroutine\MySQL;

/**
 * @property-read $affected_rows
 * @property-read $insert_id
 * @property-read $error
 * @property-read $errno
 */
class Statement
{

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.8.6%20-%20Coroutine%EF%BC%8FMySQL%EF%BC%8FStatement-%3Eexecute.md
     */
    public function execute(array $params = [], float $timeout = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.8.7%20-%20Coroutine%EF%BC%8FMySQL%EF%BC%8FStatement-%3Efetch.md
     */
    public function fetch()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.8.8%20-%20Coroutine%EF%BC%8FMySQL%EF%BC%8FStatement-%3EfetchAll.md
     */
    public function fetchAll()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/3.8.9%20-%20Coroutine%EF%BC%8FMySQL%EF%BC%8FStatement-%3EnextResult.md
     */
    public function nextResult()
    {
    }


}

