<?php

namespace Swoole\Http;

/**
 * @property-read $fd
 * @property-read $header
 * @property-read $cookie
 * @property-read $trailer
 * @link
 * https://github.com/swoole/swoole-wiki/blob/master/doc/7.3%20-%20Http%EF%BC%8FResponse.md
 */
class Response
{

    public function initHeader()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/7.3.2%20-%20Http%EF%BC%8FResponse-%3Ecookie.md
     */
    public function cookie(string $name, string $value = null, int $expires = 0, string $path = null, string $domain = null, bool $secure = false, bool $httponly = null)
    {
    }

    public function rawcookie(string $name, string $value = null, int $expires = 0, string $path = null, string $domain = null, bool $secure = false, bool $httponly = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/7.3.3%20-%20Http%EF%BC%8FResponse-%3Estatus.md
     */
    public function status(int $http_code, string $reason = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/7.3.4%20-%20Http%EF%BC%8FResponse-%3Egzip.md
     */
    public function gzip($compress_level = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/7.3.1%20-%20Http%EF%BC%8FResponse-%3Eheader.md
     */
    public function header(string $key, string $value, bool $ucwords = true)
    {
    }

    public function trailer(string $key, string $value, bool $ucwords = true)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/7.3.6%20-%20Http%EF%BC%8FResponse-%3Ewrite.md
     */
    public function write($content)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/7.3.8%20-%20Http%EF%BC%8FResponse-%3Eend.md
     */
    public function end($content = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/7.3.7%20-%20Http%EF%BC%8FResponse-%3Esendfile.md
     */
    public function sendfile(string $filename, int $offset = 0, int $length = 0)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/7.3.5%20-%20Http%EF%BC%8FResponse-%3Eredirect.md
     */
    public function redirect($location, $http_code = null)
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/7.3.9%20-%20Http%EF%BC%8FResponse-%3Edetach.md
     */
    public function detach()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/7.3.10%20-%20Http%EF%BC%8FResponse%3A%3Acreate.md
     */
    public static function create(int $fd)
    {
    }


}

