<?php

namespace AppBundle\Traits\vehicle;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait CanMusicOnTrait
{
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $radioVolume;


    public function musicOn()
    {
        $name = $this->getName();
        echo "\n" . $name . ' music switched on';
    }

    /**
     * Sets radioVolume.
     *
     * @param int $radioVolume
     *
     * @return $this
     */
    public function setRadioVolume(int $radioVolume)
    {
        $this->radioVolume = $radioVolume;

        return $this;
    }

    /**
     * Gets radioVolume.
     *
     * @return int
     */
    public function getRadioVolume(): int
    {
        return $this->radioVolume;
    }
}
