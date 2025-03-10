<?php

namespace App;

class User implements Observer
{
    private bool $notified = false;

    public function __construct(
        private string $name
    ) {}

    public function update(string $concertInfo): void
    {
        $this->notified = true;
        echo "{$this->name} a été notifié: $concertInfo\n";
    }

    public function isNotified(): bool
    {
        return $this->notified;
    }
}