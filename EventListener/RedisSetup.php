<?php

namespace Mayeco\RedisEnableBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Snc\RedisBundle\Client\Phpredis\Client as RedisClient;

use Mayeco\RedisEnableBundle\Model\RedisEnable;

class RedisSetup
{

    protected $redisclient;

    public function __construct(RedisClient $redis) {

        $this->redisclient = $redis;

    }

    public function onKernelRequest(GetResponseEvent $event) {

        RedisEnable::setRedis($this->redisclient);

    }

}
