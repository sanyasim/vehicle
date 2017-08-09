<?php

namespace AppBundle\Domain\vehicle;

class VehicleComposer
{

    /**
    * Composes and execute dynamic method.
    *
    * @param Contract\Vehicle $object object to bind to
    * @param $mehtod method to dynamically execute
    *
    * @return mixed result of invocation
    */
    public function compose($object, $method)
    {
        $closure = \Closure::fromCallable('\Vehicle\\' . $method);
        $closure = $closure->bindTo($object);        
        return $closure;
    }
}
