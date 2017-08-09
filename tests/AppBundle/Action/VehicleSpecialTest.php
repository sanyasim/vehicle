<?php

namespace Tests\AppBundle\Action;

use AppBundle\Util\Calculator;
use PHPUnit\Framework\TestCase;

use AppBundle\Entity\{Vehicle, Car, Truck, Boat, Bike, Helicopter};

class VehicleSpecialTest extends TestCase
{
    /**
     * @dataProvider vehicleProvider
     */
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

        $this->assertTrue(true);
    }

    public function vehicleProvider()
    {
        // $car1 = factory(Car::class)->make();
        // $truck1 = factory(Truck::class)->make();

        $vehicles = [
            new Car('bmw'),
            Car::getVehicle('renault'),
            Car::getVehicle()->setName('audi'),
        ];

        return [
            $vehicles,
        ];
    }

}
