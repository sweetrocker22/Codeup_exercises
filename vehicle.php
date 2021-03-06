<?php

class Vehicle {
    
  private $name = 'Default';

  public function honk()
  {
    echo "Honk, Honk from " . $this->name . "!" . PHP_EOL;
  }
  public function getname()
  {
    return $this->name;
  }
  public function setname($name)
  {
    $this->name = ucfirst(strtolower($name));
  }
}

class Car extends Vehicle {

  public function beep()
  {
    echo "Beep, Beep from " . $this->getname() . "!" . PHP_EOL;
  }

  public function openTrunk()
  {
    echo "Opened the trunk." . PHP_EOL;
  }

  public function closeTrunk()
  {
    echo "Closed the trunk." . PHP_EOL;
  }
}

class Truck extends Vehicle {

  public function openTailgate()
  {
    echo "Opened the tailgate." . PHP_EOL;
  }

  public function closeTailgate()
  {
    echo "Closed the tailgate." . PHP_EOL;
  }
}

$car = new Car();
// $car->name = "Honda";
$car->setname('hOnDa');
$car->beep();
$car->honk();
$car->openTrunk();


$truck = new Truck();
// $truck->name = "Ford";
$truck->honk();
$truck->openTailgate();
