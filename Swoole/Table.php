<?php

namespace Swoole;

/**
 * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.3%20-%20Table.md
 */
class Table implements \Iterator, \ArrayAccess, \Countable
{

    const TYPE_INT = 1;

    const TYPE_STRING = 7;

    const TYPE_FLOAT = 6;

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.3.1%20-%20Table-%3E__construct.md
     */
    public function __construct(int $table_size, float $conflict_proportion = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.3.2%20-%20Table-%3Ecolumn.md
     */
    public function column(string $name, int $type, int $size = 0)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.3.3%20-%20Table-%3Ecreate.md
     */
    public function create()
    {
    }

    public function destroy()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.3.4%20-%20Table-%3Eset.md
     */
    public function set(string $key, array $value)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.3.7%20-%20Table-%3Eget.md
     */
    public function get(string $key, string $field = '')
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.3.9%20-%20Table-%3Ecount.md
     */
    public function count(int $mode = COUNT_NORMAL)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.3.10%20-%20Table-%3Edel.md
     */
    public function del(string $key)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.3.8%20-%20Table-%3Eexist.md
     */
    public function exist(string $key)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.3.5%20-%20Table-%3Eincr.md
     */
    public function incr(string $key, string $column, $incrby = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/6.3.6%20-%20Table-%3Edecr.md
     */
    public function decr(string $key, string $column, $decrby = null)
    {
    }

    public function getMemorySize()
    {
    }

    public function offsetExists($offset)
    {
    }

    public function offsetGet(string $offset, string $field = '')
    {
    }

    public function offsetSet($offset, $value)
    {
    }

    public function offsetUnset($offset)
    {
    }

    public function rewind()
    {
    }

    public function next()
    {
    }

    public function current()
    {
    }

    public function key()
    {
    }

    public function valid()
    {
    }


}

