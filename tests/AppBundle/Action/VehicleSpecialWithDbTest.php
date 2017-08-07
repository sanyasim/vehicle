<?php

namespace Tests\AppBundle\Action;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

use AppBundle\Entity\{Car, Truck, Boat, Bike, Helicopter};

class VehicleSpecialWithDbTest extends KernelTestCase
{    
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        self::bootKernel();

        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testVehicleSpecialWithDb()
    {
        $vehicle1 = new Car('renault');
        $vehicle2 = Truck::getVehicle('kamaz');
        $vehicle3 = Helicopter::getVehicle()->setName('apache');

        $this->em->persist($vehicle1);
        $this->em->persist($vehicle2);
        $this->em->persist($vehicle3);

        $this->em->flush();

        $this->assertTrue(true);
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();

        $this->em->close();
        $this->em = null; // avoid memory leaks
    }

}
