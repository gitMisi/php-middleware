<?php

namespace GitMisi\IntentionWare;

use GitMisi\IntentionWare\Middlewares\MiddlewareInterface;

class FifoMiddlewarePool implements MiddlewarePoolInterface
{
    private $pool;

    public function __construct(array $middlewares)
    {
        foreach ($middlewares as $middleware)
        {
            $this->add($middleware);
        }
    }

    public function add(MiddlewareInterface $middleware)
    {
        $this->pool[] = $middleware;
    }

    public function run()
    {
        // TODO: Implement run() method.
    }
}
