<?php

namespace GitMisi\IntentionWare\Middlewares;

use GitMisi\IntentionWare\Request;
use GitMisi\IntentionWare\ResponseInterface;

class LanguageAwareUriMiddleware implements MiddlewareInterface
{
    public function __invoke(Request $request, ResponseInterface $response, callable $next)
    {
        if (stripos($request->url(), '/en/') === false)
        {
            
        }
    }
}
