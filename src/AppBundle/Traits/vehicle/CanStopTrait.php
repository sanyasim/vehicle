<?php

namespace AppBundle\Traits\vehicle;

trait CanStopTrait
{
	public function stop() 
	{
		$name = $this->getName();
		echo  "\n" . $name . ' stopped';
	}

}
