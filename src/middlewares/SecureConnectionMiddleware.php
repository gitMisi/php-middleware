<?php

namespace GitMisi\IntentionWare\Middlewares;

use GitMisi\IntentionWare\PermanentRedirectResponse;
use GitMisi\IntentionWare\Request;
use GitMisi\IntentionWare\ResponseInterface;

class SecureConnectionMiddleware implements MiddlewareInterface
{
    private $secureConnectionEnabled;

    /**
     * @param bool $enabled
     */
    public function __construct($enabled)
    {
        $this->secureConnectionEnabled = $enabled;
    }

    public function __invoke(Request $request, ResponseInterface $response, callable $next)
    {
        if (!$request->isSecure() && $this->secureConnectionEnabled)
        {
            return new PermanentRedirectResponse('https://example.com');
        }

        return $next($request, $response);
    }
}
