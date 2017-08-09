<?php

namespace Tests\AppBundle\Entity;

use PHPUnit\Framework\TestCase;

use AppBundle\Entity\Vehicle;

use AppBundle\Domain\fuel\Fuel;
use AppBundle\Domain\load\Load;

class VehicleTest extends TestCase
{
    public function testSwim()
    {
        $vehicle = new Vehicle('boat');
        $vehicle->swim();

        $this->assertTrue('boat' == $vehicle->getName());
        $this->expectOutputString('boat swimming');
    }

    public function testRefuel()
    {
        $vehicle = new Vehicle('helicopter');

        $this->assertTrue('helicopter' == $vehicle->getName());

        $object = new Fuel('gas');

        $vehicle->refuel($object);
        $this->expectOutputString("\n" . 'helicopter refuel gas');
    }

    /**
     * @dataProvider moveProvider
     */
    public function testMove(string $name)
    {
        $vehicle = new Vehicle($name);
        $vehicle->move();

        $this->assertTrue($name == $vehicle->getName());
        $this->expectOutputString($name . ' moveing');
    }

    public function moveProvider()
    {
        $names = [
            'bmw',
            'kamaz',
            'harley-davidson',
        ];

        return [
            $names,
        ];
    }

    /**
     * @dataProvider moveWrongVehicleProvider
     */
    public function testMoveWrongVehicle(string $name)
    {
        $vehicle = new Vehicle($name);
        $vehicle->move();

        $this->assertTrue($name == $vehicle->getName());
        $this->expectOutputString('');
    }

    public function moveWrongVehicleProvider()
    {
        $names = [
            'boat',
            'helicopter',
        ];

        return [
            $names,
        ];
    }
}
