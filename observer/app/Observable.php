<?php

namespace App;

interface Observable
{
    public function attach(Observer $observer): void;
    public function detach(Observer $observer): void;
    public function notifyObservers(string $concertInfo): void;
}