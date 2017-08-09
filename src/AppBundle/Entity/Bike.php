<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use AppBundle\Entity\Vehicle;

use AppBundle\Traits\vehicle\{BikeTrait};

use AppBundle\Contracts\vehicle\Bike as BikeInterface;

/**
 * Bike entity
 *
 * @ApiResource
 * @ORM\Entity
 *
 */
class Bike extends Vehicle implements BikeInterface
{
    use BikeTrait;
}
