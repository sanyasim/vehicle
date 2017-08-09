<?php

namespace AppBundle\Traits\vehicle;

trait CanRefuelTrait
{
    public function refuel(\AppBundle\Domain\fuel\Fuel $object) 
	{
		$name = $this->getName();
		echo  "\n" . $name . ' refuel ' . $object;
	}

}
