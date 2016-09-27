<?php

namespace GitMisi\IntentionWare;

use GitMisi\IntentionWare\Middlewares\MiddlewareInterface;

interface MiddlewarePoolInterface
{
    public function add(MiddlewareInterface $middleware);

    public function run();
}
