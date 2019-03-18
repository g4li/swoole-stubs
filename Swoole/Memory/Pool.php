<?php

namespace Swoole\Memory;

/**
 *
 */
class Pool
{

    const TYPE_RING = 1;

    const TYPE_GLOBAL = 2;

    const TYPE_FIXED = 0;

    const TYPE_MALLOC = 3;

    const TYPE_EMALLOC = 4;

    public function __construct(int $size, int $type, int $slice_size = null, bool $shared = false)
    {
    }

    public function alloc(int $size = null)
    {
    }


}

