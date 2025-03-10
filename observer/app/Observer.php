<?php

namespace App;

interface Observer
{
    public function update(string $concertInfo): void;
}