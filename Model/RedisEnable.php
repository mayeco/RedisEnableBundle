<?php

namespace Mayeco\RedisEnableBundle\Model;

use Snc\RedisBundle\Client\Phpredis\Client as RedisClient;

class RedisEnable
{

    protected static $redis;

    public static function redis() {

        return static::$redis;
    }

    public static function setRedis(RedisClient $redis) {

        static::$redis = $redis;
    }

}
