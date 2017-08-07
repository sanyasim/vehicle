<?php

namespace AppBundle\Traits\vehicle;

trait CanRefuelTrait
{
    public function refuel(string $gas) 
	{
		$name = $this->getName();
		echo  "\n" . $name . ' refuel ' . $gas;
	}

}
