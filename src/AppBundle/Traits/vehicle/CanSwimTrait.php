<?php

namespace AppBundle\Traits\vehicle;

trait CanSwimTrait
{
    public function swim()
    {
        $name = $this->getName();
        echo "\n" . $name . ' swimming';
    }
}
