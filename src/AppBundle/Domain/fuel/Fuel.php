<?php

namespace AppBundle\Domain\fuel;

class Fuel
{
    private $fuel;

    public function __construct(string $fuel)
    {
        $this->fuel = $fuel;
    }

    public function __toString()
    {
        return $this->fuel;
    }
}
