<?php

namespace GitMisi\IntentionWare;

class Response implements ResponseInterface
{
    private $code;

    /**
     * @param int $code
     */
    public function __construct($code)
    {
        $this->code = $code;
    }
    
    public function code()
    {
        return $this->code;
    }
}
