<?php

namespace AppBundle\Contracts\vehicle;

interface CanRefuel
{
    public function refuel(\AppBundle\Domain\fuel\Fuel $object);
}
