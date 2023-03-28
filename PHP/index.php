<?php
    require_once ('car.php');
    require_once ('uberX.php');
    require_once ('uberPool.php');
    require_once ('account.php');

    $uberX = new uberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
    $uberX -> printDataCar();

    $uberPool = new uberPool("GGG785", new Account("Andrea Ferran", "YRT498"), "Dodge", "Attitude");
    $uberPool->printDataCar();
?>