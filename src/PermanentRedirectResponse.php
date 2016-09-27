<?php

namespace GitMisi\IntentionWare;

class PermanentRedirectResponse implements ResponseInterface
{
    /** @var ResponseInterface */
    private $response;

    private $location;

    /**
     * @param string $location
     */
    public function __construct($location)
    {
        $this->response = new Response(301);
        $this->location = $location;
    }

    public function code()
    {
        return $this->response->code();
    }

    public function location()
    {
        return $this->location;
    }
}
