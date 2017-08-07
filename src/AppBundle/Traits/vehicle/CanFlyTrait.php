<?php

namespace AppBundle\Traits\vehicle;

trait CanFlyTrait
{
    public function fly()
    {
        $name = $this->getName();
        echo "\n" . $name . ' flying';
    }

    public function takeOff()
    {
        $name = $this->getName();
        echo "\n" . $name . ' took off';
    }

    public function landing()
    {
        $name = $this->getName();
        echo "\n" . $name . ' landing';
    }
}
