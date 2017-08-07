<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use AppBundle\Entity\Vehicle;

use AppBundle\Traits\vehicle\{HelicopterTrait};

/**
 * Boat entity
 *
 * @ApiResource
 * @ORM\Entity
 *
 */
class Helicopter extends Vehicle
{
    use HelicopterTrait; 
}
