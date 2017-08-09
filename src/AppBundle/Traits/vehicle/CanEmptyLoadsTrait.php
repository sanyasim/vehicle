<?php

namespace AppBundle\Traits\vehicle;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait CanEmptyLoadsTrait
{
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $loadMax;

	public function emptyLoads(\AppBundle\Domain\load\Load $object) 
	{
		$name = $this->getName();

		echo "\n" . $name . ' emptied loads' . $object;
	}

	/**
     * Sets loadMax.
     *
     * @param int $loadMax
     *
     * @return $this
     */
    public function setLoadMax(int $loadMax)
    {
        $this->loadMax = $loadMax;

        return $this;
    }

    /**
     * Gets loadMax.
     *
     * @return int
     */
    public function getLoadMax(): int
    {
        return $this->loadMax;
    }
}
