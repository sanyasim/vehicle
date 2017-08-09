<?php

namespace Vehicle;

function move()
{
    $name = $this->getName();
    if ($name == 'bmw' || $name == 'kamaz' || $name == 'harley-davidson') {
        echo $name . ' moveing';
    }
}
function stop()
{
    $name = $this->getName();
    echo $name . ' stopped';
}
function musicOn()
{
    $name = $this->getName();
    echo $name . ' music switched on';
}
function takeOff()
{
    $name = $this->getName();
    echo $name . ' took off';
}
function landing()
{
    $name = $this->getName();
    echo $name . ' landing';
}
function fly()
{
    $name = $this->getName();
    echo $name . ' flying';
}
function swim()
{
    $name = $this->getName();
    echo $name . ' swimming';
}
function emptyLoads(\AppBundle\Domain\load\Load $object)
{
    $name = $this->getName();
    echo $name . ' emptyLoads ' . $object;
}
function refuel(\AppBundle\Domain\fuel\Fuel $object)
{
    $name = $this->getName();
    echo $name . ' refuel ' . $object;
}


// function refuel(string $gas) 
// {
//     $name = $this->getName();
//     echo  "\n" . $name . ' refuel ' . $gas;
// }

// function move()
// {
//     $name = $this->getName();
//     if (in_array($name, ['bmw', 'kamaz', 'harley-davidson'])) {
//         echo  "\n" . $name . ' moveing ';
//     }
// }

// function swim()
// {
//     $name = $this->getName();
//     echo "\n" . $name . ' swimming';
// }

// function emptyLoads() 
// {
//     $name = $this->getName();
//     echo "\n" . $name . ' emptied loads';
// }

// function fly()
// {
//     $name = $this->getName();
//     echo "\n" . $name . ' flying';
// }

// function takeOff()
// {
//     $name = $this->getName();
//     echo "\n" . $name . ' took off';
// }

// function landing()
// {
//     $name = $this->getName();
//     echo "\n" . $name . ' landing';
// }

// function musicOn()
// {
//     $name = $this->getName();
//     echo "\n" . $name . ' music switched on';
// }

// function stop() 
// {
//     $name = $this->getName();
//     echo  "\n" . $name . ' stopped';
// }
