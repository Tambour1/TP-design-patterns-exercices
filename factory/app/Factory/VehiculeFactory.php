<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\VehiculeInterface;

class VehiculeFactory
{
    public static function create($type, $costPerKm, $fuelType ): VehiculeInterface
    {
        switch ($type) {
            case 'bicycle':
                return new Bicycle($costPerKm, $fuelType);
                break;
            case 'car':
                return new Car($costPerKm, $fuelType);
                break;
            case 'truck':
                return new Truck($costPerKm, $fuelType);
                break;
            default:
                throw new \InvalidArgumentException('Vehicule type not found');
        }
    }

    public static function createPoidsDistance($distance, $weight, $costPerKm, $fuelType): VehiculeInterface
    {
        if ($distance < 20 && $weight <= 20) {
            return new Bicycle($costPerKm, $fuelType);
        } elseif ($weight <= 200) {
            return new Car($costPerKm, $fuelType);
        } else {
            return new Truck($costPerKm, $fuelType);
        }
    }
}