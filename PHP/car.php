<?php

require_once ('account.php');
require_once ('car.php');

class Car{
    public $id;
    public $license;
    public $driver;
    public $passanger;

    public function __construct($license, $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar() {
        echo " | License: " . $this->license; 
        echo " | Driver: " . $this->driver->name;
        echo " | Document: " . $this->driver->document;
        
    }

}

?>