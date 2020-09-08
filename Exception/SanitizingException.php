<?php

namespace FR3D\LdapBundle\Exception;

class SanitizingException extends \Exception
{
    protected $actualException;
    protected $secret;

    public function __construct($actualException, $secret)
    {
        $this->actualException = $actualException;
        $this->secret = $secret;
    }

    public function __toString()
    {
        return str_replace([$this->secret, substr($this->secret,0,15).'...'], '****', $this->actualException->__toString());
    }
}
