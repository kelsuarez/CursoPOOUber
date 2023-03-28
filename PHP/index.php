<?php
    require_once ('car.php');
    require_once ('uberX.php');
    require_once ('uberPool.php');
    require_once ('uberVan.php');
    require_once ('account.php');

    $uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
    $uberX->setPassengers(4);
    $uberX->printDataCar();

    $uberPool = new uberPool("GGG785", new Account("Andrea Ferran", "YRT498"), "Dodge", "Attitude");
    $uberPool->printDataCar();

    $uberVan = new uberVan("VAN106", new Account("Monsieur Van", "VAN650"), "Nissan", "Versa");
    $uberVan->setPassengers(6);
    $uberVan->printDataCar();
?>