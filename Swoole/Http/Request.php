<?php

namespace Swoole\Http;

/**
 * @property-read $fd
 * @property-read $streamId
 * @property-read $header
 * @property-read $server
 * @property-read $request
 * @property-read $cookie
 * @property-read $get
 * @property-read $files
 * @property-read $post
 * @property-read $tmpfiles
 * @link
 * https://github.com/swoole/swoole-wiki/blob/master/doc/7.2%20-%20Http%EF%BC%8FRequest.md
 */
class Request
{

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/7.2.7%20-%20Http%EF%BC%8FRequest-%3ErawContent.md
     */
    public function rawcontent()
    {
    }

    /**
     * @link https://github.com/swoole/swoole-wiki/blob/master/doc/7.2.8%20-%20Http%EF%BC%8FRequest-%3EgetData.md
     */
    public function getData()
    {
    }


}

