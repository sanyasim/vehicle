<?php

namespace AppBundle\Action;

use Doctrine\Common\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\ORM\EntityManagerInterface;

use AppBundle\Entity\{Car, Truck, Boat, Bike, Helicopter};

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
        // $car1 = new Car('bmw');
        // // $car2 = new Car('renault');
        // // $car3 = new Car('audi');

        // $this->em->persist($car1);
        // // $this->em->persist($car2);
        // // $this->em->persist($car3);

        // $this->em->flush();



        // exit;

        $vehicles = [
            new Car('bmw'),
            //Car::getVehicle('renault'),
            //Car::getVehicle()->setName('audi'),
            new Truck('kamaz'),
            new Boat('boat'),
            new Helicopter('helicopter'),
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
                    $vehicle->emptyLoads();
                    break;
                case 'helicopter':
                    $vehicle->takeOff();
                    $vehicle->fly();
                    $vehicle->landing();
                    break;
            }
            
            //suppose that gas is common fuel for ALL vehicles
            $vehicle->refuel('gas');
        }

        exit;

        return new Response('hello world');
    }
}
