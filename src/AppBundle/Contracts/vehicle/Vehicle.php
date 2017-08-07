<?php

namespace AppBundle\Contracts\vehicle;

interface Vehicle
{
    /**
     * Refuel vehicle
     *
     * @param  string  $gas
     * @return void
     */
    public function refuel(string $gas);

}