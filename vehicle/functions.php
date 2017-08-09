<?php

namespace Vehicle;

function refuel(string $gas) 
{
    $name = $this->getName();
    echo  "\n" . $name . ' refuel ' . $gas;
}

function move()
{
    $name = $this->getName();
    if (in_array($name, ['bmw', 'kamaz', 'harley-davidson'])) {
        echo  "\n" . $name . ' moveing ';
    }
}

function swim()
{
    $name = $this->getName();
    echo "\n" . $name . ' swimming';
}

function emptyLoads() 
{
    $name = $this->getName();
    echo "\n" . $name . ' emptied loads';
}

function fly()
{
    $name = $this->getName();
    echo "\n" . $name . ' flying';
}

function takeOff()
{
    $name = $this->getName();
    echo "\n" . $name . ' took off';
}

function landing()
{
    $name = $this->getName();
    echo "\n" . $name . ' landing';
}

function musicOn()
{
    $name = $this->getName();
    echo "\n" . $name . ' music switched on';
}

function stop() 
{
    $name = $this->getName();
    echo  "\n" . $name . ' stopped';
}
