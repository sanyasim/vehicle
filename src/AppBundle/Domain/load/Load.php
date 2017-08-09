<?php

namespace AppBundle\Domain\load;

class Load
{
    private $load;

    public function __construct(string $load)
    {
        $this->load = $load;
    }

    public function __toString()
    {
        return $this->load;
    }
}
