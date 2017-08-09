<?php

namespace AppBundle\Contracts\vehicle;

interface CanRefuel
{
    public function refuel(string $gas);
}
