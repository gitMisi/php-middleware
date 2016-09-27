<?php

namespace GitMisi\IntentionWare;

class Request
{
    private $url;

    /**
     * @param string $url
     */
    private function __construct($url)
    {
        $this->url = $url;
    }

    public function url()
    {
        return $this->url;
    }

    public function isSecure()
    {
        return true;
    }
}

