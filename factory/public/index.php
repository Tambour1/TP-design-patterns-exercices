<?php
require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici

use App\Factory\VehiculeFactory;

$vehicule = VehiculeFactory::create('car', 0.5, 'electric');
echo $vehicule->getCostPerKm() . " " . $vehicule->getFuelType() . PHP_EOL; 

$vehicule = VehiculeFactory::create('bicycle', 0.1, 'muscle');
echo $vehicule->getCostPerKm() . " " . $vehicule->getFuelType() . PHP_EOL; 

$vehicule = VehiculeFactory::create('truck', 1.5, 'diesel');
echo $vehicule->getCostPerKm() . " " . $vehicule->getFuelType() . PHP_EOL; 

$vehicule = VehiculeFactory::createPoidsDistance(10, 10, 0.5, 'electric'); 
echo get_class($vehicule) . " " . $vehicule->getCostPerKm() . " " . $vehicule->getFuelType() . PHP_EOL;  

$vehicule = VehiculeFactory::createPoidsDistance(21, 100, 0.5, 'electric'); 
echo get_class($vehicule) . " " . $vehicule->getCostPerKm() . " " . $vehicule->getFuelType() . PHP_EOL;

$vehicule = VehiculeFactory::createPoidsDistance(21, 201, 0.5, 'electric');
echo get_class($vehicule) . " " . $vehicule->getCostPerKm() . " " . $vehicule->getFuelType() . PHP_EOL;