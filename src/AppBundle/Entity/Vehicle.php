<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use AppBundle\Traits\vehicle\{VehicleTrait};

/**
 * Vehicle entity
 *
 * @ApiResource
 * @ORM\Entity
 *
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"vehicle" = "Vehicle", "car" = "Car", "truck" = "Truck", "boat" = "Boat", "bike" = "Bike", "helicopter" = "Helicopter"})
 */
class Vehicle
{
    use VehicleTrait;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * Constructor
     *
     * @param string $name
     *
     */
    public function __construct(string $name = null)
    {
        $this->name = $name;
    }

    /**
     * Factory
     *
     * @param mixed $params
     * @return $this      
     */
    public static function getVehicle(...$params)
    {
        return new static(...$params);
    }

    /**
     * Sets name.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

}
