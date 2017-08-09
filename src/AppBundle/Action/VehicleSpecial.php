<?php

namespace AppBundle\Action;

use Doctrine\Common\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\ORM\EntityManagerInterface;

use AppBundle\Entity\{Vehicle, Car, Truck, Boat, Bike, Helicopter};

use AppBundle\Domain\fuel\Fuel;
use AppBundle\Domain\load\Load;

class VehicleSpecial
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route(
     *     name="vehicle_special",
     *     path="/myvehicle",
     * )
     * @Method("GET")
     */
    public function __invoke()
    {
        $vehicles = [
            new Vehicle('bmw'),
            //Car::getVehicle('renault'),
            //Car::getVehicle()->setName('audi'),
            new Vehicle('kamaz'),
            new Vehicle('boat'),
            new Vehicle('helicopter'),
        ];

        foreach ($vehicles as $vehicle) {
            echo "<pre>\n";

            $name = $vehicle->getName();

            switch ($name) {
                case 'bmw':
                    $vehicle->move();
                    $vehicle->musicOn();
                    $vehicle->stop();
                    break;
                case 'boat':
                    $vehicle->swim();
                    $vehicle->stop();
                    break;
                case 'kamaz':
                    $vehicle->move();
                    $vehicle->stop();
                    $vehicle->emptyLoads(new Load('sand'));
                    break;
                case 'helicopter':
                    $vehicle->takeOff();
                    $vehicle->fly();
                    $vehicle->landing();
                    break;
            }
            
            //suppose that gas is common fuel for ALL vehicles
            $vehicle->refuel(new Fuel('gas'));
        }

        exit;

        return new Response('hello world');
    }
}
