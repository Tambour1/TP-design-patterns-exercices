<?php

namespace App;

class MusicBand implements Observable
{
    private array $observers = [];

    public function __construct(
        private string $name,
        private array $concerts = []
    ) {}

    public function addNewConcertDate(string $date, string $location): void
    {
        $concertInfo = "Le concert est à $location le $date";
        $this->concerts[] = $concertInfo;
        $this->notifyObservers($concertInfo);
    }

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        $this->observers = array_filter(
            $this->observers,
            fn($attachedObserver) => $attachedObserver !== $observer
        );
    }

    public function notifyObservers(string $concertInfo): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($concertInfo);
        }
    }
}