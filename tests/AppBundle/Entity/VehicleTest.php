<?php

namespace Tests\AppBundle\Entity;

use PHPUnit\Framework\TestCase;

use AppBundle\Entity\Vehicle;

use AppBundle\Domain\fuel\Fuel;
use AppBundle\Domain\load\Load;

class VehicleTest extends TestCase
{
    public function vehiclesProvider()
    {
        $vehicles = [
            ['bmw', new Vehicle('bmw')],
            ['boat', new Vehicle('boat')],
            ['kamaz', new Vehicle('kamaz')],
            ['helicopter', new Vehicle('helicopter')],
        ];

        return $vehicles;
    }

    /**
     * @dataProvider vehiclesProvider
     *
     */
    public function testVehicleHasName($name, $vehicle)
    {
        $this->assertTrue($name == $vehicle->getName());
    }

    /**
     * @dataProvider vehiclesProvider
     *
     */
    public function testRefuel($name, $vehicle)
    {
        $object = new Fuel('gas');
        $vehicle->refuel($object);

        $this->expectOutputString("\n" . $vehicle->getName() . ' refuel gas');
    }


    // CAR /////////////////////////////////////////////////
    public function testMove()
    {
        $vehicle = new Vehicle('bmw');
        $vehicle->move();

        $this->expectOutputString($vehicle->getName() . ' moveing');

        return $vehicle;
    }

     /**
     * @depends testMove 
     *
     */
    public function testMusicOn($vehicle)
    {
        $vehicle->musicOn();

        $this->expectOutputString($vehicle->getName() . ' music switched on');

        return $vehicle;
    }   

    /**
     * @depends testMove 
     *
     */
    public function testStopAfterMove($vehicle)
    {
        $vehicle->stop();

        $this->expectOutputString($vehicle->getName() . ' stopped');

        return $vehicle;
    }


    // BOAT /////////////////////////////////////////////////
    public function testSwim()
    {
        $vehicle = new Vehicle('boat');
        $vehicle->swim();
        $this->expectOutputString($vehicle->getName() . ' swimming');

        return $vehicle;
    }

    /**
     * @depends testSwim 
     *
     */
    public function testStopAfterSwim($vehicle)
    {
        $vehicle->stop();
        $this->expectOutputString($vehicle->getName() . ' stopped');

        return $vehicle;
    }



    // TRUCK ////////////////////////////////////////

    public function testMoveTruck()
    {
        $vehicle = new Vehicle('kamaz');
        $vehicle->move();

        $this->expectOutputString($vehicle->getName() . ' moveing');

        return $vehicle;
    }

    /**
     * @depends testMoveTruck 
     *
     */
    public function testStopAfterMoveTruck($vehicle)
    {
        $vehicle->stop();
        $this->expectOutputString($vehicle->getName() . ' stopped');

        return $vehicle;
    }

    /**
     * @depends testStopAfterMoveTruck 
     *
     */
    public function testEmptyLoads($vehicle)
    {
        $load = new Load('sand');
        $vehicle->emptyLoads($load);

        $this->expectOutputString($vehicle->getName() . ' emptyLoads ' . $load);

        return $vehicle;
    }




    // PLANE ///////////////////////////////////////////////
    public function testTakeOff()
    {
        $vehicle = new Vehicle('helicopter');
        $vehicle->takeOff();
        $this->expectOutputString($vehicle->getName() . ' took off');

        return $vehicle;
    }    
    
    /**
     * @depends testTakeOff 
     *
     */
    public function testFly($vehicle)
    {
        $vehicle->fly();
        $this->expectOutputString($vehicle->getName() . ' flying');

        return $vehicle;
    }

    /**
     * @depends testFly
     *
     */
    public function testLanding($vehicle)
    {
        $vehicle->landing();
        $this->expectOutputString($vehicle->getName() . ' landing');
        
        return $vehicle;
    }

     /**
     * @depends testStopAfterMove
     * @depends testStopAfterSwim
     * @depends testEmptyLoads
     * @depends testLanding
     *
     */
    public function testRefuelAfterRunning($vehicle1, $vehicle2, $vehicle3, $vehicle4)
    {
        $object = new Fuel('gas');

        $vehicle1->refuel($object);
        $vehicle2->refuel($object);
        $vehicle3->refuel($object);
        $vehicle4->refuel($object);        
    }

}
