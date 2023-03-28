<?php 

require_once ('car.php');

class UberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model){

        parent::__construct($license,$driver);

        $this->brand = $brand;
        $this->model = $model;
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