<?php

namespace AppBundle\Traits\vehicle;

trait CanMoveTrait
{
    public function move()
    {
        $name = $this->getName();
        echo  "\n" . $name . ' moveing ';

        // if (in_array($name, ['bmw', 'kamaz', 'harley-davidson'])) {
        //     echo  "\n" . $name . ' moveing ';
        // }
    }
}
