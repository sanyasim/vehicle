<?php

namespace AppBundle\Domain\vehicle;

use AppBundle\Entity\Vehicle as VehicleEntity;
use AppBundle\Contracts\vehicle\Vehicle as VehicleInterface;

/**
* Implements Prototype pattern for Vehicle entity or function composition (as possible variant)
* Should be FACADE (static proxy) backed by DI container.
*
*/
class VehicleComposer
{

    /**
    * Composes and execute dynamic method.
    *
    * @param \AppBundle\Contracts\vehicle\Vehicle $object object to bind to
    * @param string $mehtod function to dynamically execute
    *
    * @return callable found function
    */
    public static function compose(VehicleInterface $object, string $method):callable
    {
        $closure = \Closure::fromCallable('\Vehicle\\' . $method);
        $closure = $closure->bindTo($object);
        return $closure;
    }

    /**
    *  Finds and returns prototype object dynamically (by logic)
    *
    * @param string $name
    *
    * @return \AppBundle\Entity\Vehicle prototype object
    */
    public static function getPrototype(string $name = null):VehicleEntity
    {
        $object = new class($name) extends VehicleEntity
        {
            public function move()
            {
                $name = $this->getName();
                if ($name == 'bmw' || $name == 'kamaz' || $name == 'harley-davidson') {
                    echo $name . ' moveing';
                }
            }
            public function stop()
            {
                $name = $this->getName();
                echo $name . ' stopped';
            }
            public function musicOn()
            {
                $name = $this->getName();
                echo $name . ' music switched on';
            }
            public function takeOff()
            {
                $name = $this->getName();
                echo $name . ' took off';
            }
            public function landing()
            {
                $name = $this->getName();
                echo $name . ' landing';
            }
            public function fly()
            {
                $name = $this->getName();
                echo $name . ' flying';
            }
            public function swim()
            {
                $name = $this->getName();
                echo $name . ' swimming';
            }
            public function emptyLoads(\AppBundle\Domain\load\Load $object)
            {
                $name = $this->getName();
                echo $name . ' emptyLoads ' . $object;
            }
            public function refuel(\AppBundle\Domain\fuel\Fuel $object)
            {
                $name = $this->getName();
                echo $name . ' refuel ' . $object;
            }

        };

        return $object;
    }
}
