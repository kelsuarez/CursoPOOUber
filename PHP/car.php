<?php

require_once ('account.php');

class Car{
    public $id;
    public $license;
    public $driver;
    public $passengers;

    public function __construct($license, $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar() {
        echo " | License: " . $this->license; 
        echo " | Driver: " . $this->driver->name;
        echo " | Document: " . $this->driver->document;
        echo " | Passengers: " . $this->passengers;
        
    }

    public function getPassengers() {
        return $this->$passengers;
        
    }

    public function setPassengers() {
        if($passengers == 4){
            $this->passengers == $passengers;
        }else{
            echo"Only 4 passengers";
        }
    }

}

?>