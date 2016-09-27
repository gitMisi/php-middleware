<?php

namespace GitMisi\IntentionWare\Middlewares;

use GitMisi\IntentionWare\Request;
use GitMisi\IntentionWare\ResponseInterface;

interface MiddlewareInterface
{
    public function __invoke(Request $request, ResponseInterface $response, callable $next);
}