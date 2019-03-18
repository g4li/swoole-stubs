<?php

namespace Swoole\Coroutine;

/**
 * @property-read $host
 * @property-read $port
 * @property-read $setting
 * @property-read $sock
 * @property-read $connected
 * @property-read $errType
 * @property-read $errCode
 * @property-read $errMsg
 * @link
 * https://github.com/swoole/swoole-wiki/blob/master/doc/3.6%20-%20Coroutine%EF%BC%8FRedis.md
 */
class Redis
{

    public function __construct($config = null)
    {
    }

    public function connect(string $host, int $port = 0, bool $serialize = false)
    {
    }

    public function setOptions(array $options)
    {
    }

    public function setDefer(bool $defer = true)
    {
    }

    public function getDefer()
    {
    }

    public function recv()
    {
    }

    public function request(array $params)
    {
    }

    public function close()
    {
    }

    public function set(string $key, $value, $timeout = null, $opt = null)
    {
    }

    public function setBit(string $key, int $offset, bool $value)
    {
    }

    public function setEx($key, $expire, $value)
    {
    }

    public function psetEx($key, $expire, $value)
    {
    }

    public function lSet($key, $index, $value)
    {
    }

    public function get($key)
    {
    }

    public function mGet(array $keys)
    {
    }

    public function del($key, $other_keys = null)
    {
    }

    public function hDel($key, $member, $other_members = null)
    {
    }

    public function hSet(string $key, string $member, $value)
    {
    }

    public function hMSet(string $key, array $pairs)
    {
    }

    public function hSetNx(string $key, string $member, $value)
    {
    }

    public function delete($key, $other_keys = null)
    {
        return call_user_func_array([$this, "del"], func_get_args());
    }

    public function mSet(array $pairs)
    {
    }

    public function mSetNx(array $pairs)
    {
    }

    public function getKeys($pattern)
    {
    }

    public function keys($pattern)
    {
        return call_user_func_array([$this, "getKeys"], func_get_args());
    }

    public function exists($key, $other_keys = null)
    {
    }

    public function type($key)
    {
    }

    public function strLen($key)
    {
    }

    public function lPop($key)
    {
    }

    public function blPop($key, $timeout_or_key, $extra_args = null)
    {
    }

    public function rPop($key)
    {
    }

    public function brPop($key, $timeout_or_key, $extra_args = null)
    {
    }

    public function bRPopLPush($src, $dst, $timeout)
    {
    }

    public function lSize($key)
    {
    }

    public function lLen($key)
    {
        return call_user_func_array([$this, "lSize"], func_get_args());
    }

    public function sSize($key)
    {
    }

    public function scard($key)
    {
        return call_user_func_array([$this, "sSize"], func_get_args());
    }

    public function sPop($key)
    {
    }

    public function sMembers($key)
    {
    }

    public function sGetMembers($key)
    {
        return call_user_func_array([$this, "sMembers"], func_get_args());
    }

    public function sRandMember($key, $count = null)
    {
    }

    public function persist($key)
    {
    }

    public function ttl($key)
    {
    }

    public function pttl($key)
    {
    }

    public function zCard($key)
    {
    }

    public function zSize($key)
    {
        return call_user_func_array([$this, "zCard"], func_get_args());
    }

    public function hLen($key)
    {
    }

    public function hKeys($key)
    {
    }

    public function hVals($key)
    {
    }

    public function hGetAll($key)
    {
    }

    public function debug($key)
    {
    }

    public function restore($ttl, $key, $value)
    {
    }

    public function dump($key)
    {
    }

    public function renameKey($key, $newkey)
    {
    }

    public function rename($key, $newkey)
    {
        return call_user_func_array([$this, "renameKey"], func_get_args());
    }

    public function renameNx($key, $newkey)
    {
    }

    public function rpoplpush($src, $dst)
    {
    }

    public function randomKey()
    {
    }

    public function pfadd($key, $elements)
    {
    }

    public function pfcount($key)
    {
    }

    public function pfmerge($dstkey, $keys)
    {
    }

    public function ping()
    {
    }

    public function auth(string $password)
    {
    }

    public function unwatch()
    {
    }

    public function watch($key, $other_keys = null)
    {
    }

    public function save()
    {
    }

    public function bgSave()
    {
    }

    public function lastSave()
    {
    }

    public function flushDB()
    {
    }

    public function flushAll()
    {
    }

    public function dbSize()
    {
    }

    public function bgrewriteaof()
    {
    }

    public function time()
    {
    }

    public function role()
    {
    }

    public function setRange($key, $offset, $value)
    {
    }

    public function setNx($key, $value)
    {
    }

    public function getSet($key, $value)
    {
    }

    public function append($key, $value)
    {
    }

    public function lPushx($key, $value)
    {
    }

    public function lPush($key, $value)
    {
    }

    public function rPush($key, $value)
    {
    }

    public function rPushx($key, $value)
    {
    }

    public function sContains($key, $value)
    {
    }

    public function sismember($key, $value)
    {
        return call_user_func_array([$this, "sContains"], func_get_args());
    }

    public function zScore($key, $member)
    {
    }

    public function zRank($key, $member)
    {
    }

    public function zRevRank($key, $member)
    {
    }

    public function hGet($key, $member)
    {
    }

    public function hMGet($key, $keys)
    {
    }

    public function hExists($key, $member)
    {
    }

    public function publish($channel, $message)
    {
    }

    public function zIncrBy(string $key, float $value, $member)
    {
    }

    public function zAdd($key, $score, $value)
    {
    }

    public function zDeleteRangeByScore($key, $min, $max)
    {
    }

    public function zRemRangeByScore($key, $min, $max)
    {
        return call_user_func_array([$this, "zDeleteRangeByScore"], func_get_args());
    }

    public function zCount($key, $min, $max)
    {
    }

    public function zRange(string $key, int $start, int $end, bool $scores = false)
    {
    }

    public function zRevRange(string $key, int $start, int $end, bool $scores = false)
    {
    }

    public function zRangeByScore($key, $start, $end, $options = null)
    {
    }

    public function zRevRangeByScore($key, $start, $end, $options = null)
    {
    }

    public function zRangeByLex($key, $min, $max, $offset = null, $limit = null)
    {
    }

    public function zRevRangeByLex($key, $min, $max, $offset = null, $limit = null)
    {
    }

    public function zInter(string $key, array $keys, array $weights = null, string $aggregate = null)
    {
    }

    public function zinterstore($key, $keys, $weights = null, $aggregate = null)
    {
        return call_user_func_array([$this, "zInter"], func_get_args());
    }

    public function zUnion(string $key, array $keys, array $weights = null, string $aggregate = null)
    {
    }

    public function zunionstore($key, $keys, $weights = null, $aggregate = null)
    {
        return call_user_func_array([$this, "zUnion"], func_get_args());
    }

    public function incrBy($key, $value)
    {
    }

    public function hIncrBy($key, $member, $value)
    {
    }

    public function incr($key)
    {
    }

    public function decrBy($key, $value)
    {
    }

    public function decr($key)
    {
    }

    public function getBit($key, $offset)
    {
    }

    public function lInsert($key, $position, $pivot, $value)
    {
    }

    public function lGet($key, $index)
    {
    }

    public function lIndex($key, $integer)
    {
        return call_user_func_array([$this, "lGet"], func_get_args());
    }

    public function setTimeout($key, $timeout)
    {
    }

    public function expire($key, $integer)
    {
        return call_user_func_array([$this, "setTimeout"], func_get_args());
    }

    public function pexpire($key, $timestamp)
    {
    }

    public function expireAt($key, $timestamp)
    {
    }

    public function pexpireAt($key, $timestamp)
    {
    }

    public function move($key, $dbindex)
    {
    }

    public function select(int $dbindex)
    {
    }

    public function getRange($key, $start, $end)
    {
    }

    public function listTrim($key, $start, $stop)
    {
    }

    public function ltrim($key, $start, $stop)
    {
        return call_user_func_array([$this, "listTrim"], func_get_args());
    }

    public function lGetRange($key, $start, $end)
    {
    }

    public function lRange($key, $start, $end)
    {
        return call_user_func_array([$this, "lGetRange"], func_get_args());
    }

    public function lRem($key, $value, $count)
    {
    }

    public function lRemove($key, $value, $count)
    {
        return call_user_func_array([$this, "lRem"], func_get_args());
    }

    public function zDeleteRangeByRank($key, $start, $end)
    {
    }

    public function zRemRangeByRank($key, $min, $max)
    {
        return call_user_func_array([$this, "zDeleteRangeByRank"], func_get_args());
    }

    public function incrByFloat($key, $value)
    {
    }

    public function hIncrByFloat($key, $member, $value)
    {
    }

    public function bitCount($key)
    {
    }

    public function bitOp($operation, $ret_key, $key, $other_keys = null)
    {
    }

    public function sAdd($key, $value)
    {
    }

    public function sMove($src, $dst, $value)
    {
    }

    public function sDiff($key, $other_keys = null)
    {
    }

    public function sDiffStore($dst, $key, $other_keys = null)
    {
    }

    public function sUnion($key, $other_keys = null)
    {
    }

    public function sUnionStore($dst, $key, $other_keys = null)
    {
    }

    public function sInter($key, $other_keys = null)
    {
    }

    public function sInterStore($dst, $key, $other_keys = null)
    {
    }

    public function sRemove($key, $value)
    {
    }

    public function srem($key, $value)
    {
        return call_user_func_array([$this, "sRemove"], func_get_args());
    }

    public function zDelete($key, $member, $other_members = null)
    {
    }

    public function zRemove($key, $member, $other_members = null)
    {
        return call_user_func_array([$this, "zDelete"], func_get_args());
    }

    public function zRem($key, $member, $other_members = null)
    {
        return call_user_func_array([$this, "zDelete"], func_get_args());
    }

    public function pSubscribe(array $patterns)
    {
    }

    public function subscribe(array $channels)
    {
    }

    public function multi()
    {
    }

    public function exec()
    {
    }

    public function eval(string $script, array $args = [], int $num_keys = 0)
    {
    }

    public function evalSha(string $script_sha, array $args = [], int $num_keys = 0)
    {
    }

    public function script($cmd, $args = null)
    {
    }


}

