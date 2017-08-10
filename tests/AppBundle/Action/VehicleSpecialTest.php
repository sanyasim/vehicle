<?php

namespace Tests\AppBundle\Action;

use PHPUnit\Framework\TestCase;

use AppBundle\Entity\{Vehicle, Car, Truck, Boat, Bike, Helicopter};

use AppBundle\Domain\fuel\Fuel;
use AppBundle\Domain\load\Load;

class VehicleSpecialTest extends TestCase
{
    public function testVehicleSpecial($vehicles)
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

        $this->assertTrue(true);
    }

}
