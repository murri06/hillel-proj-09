<?php

namespace App;
class SpaceShuttle
{

    public function __construct( private string $homePlanet, protected int $crew, public float $mass )
    {
    }

    public function getHomePlanet(): string
    {
        return $this->homePlanet;
    }

    public function setPlanet(string $planet): void
    {
        $this->homePlanet = $planet;
    }

    public function getCrew(): int
    {
        return $this->crew;
    }

    public function setCrew(int $crew): void
    {
        $this->crew = $crew;
    }

    public function getMass(): float
    {
        return $this->mass;
    }

    public function setMass(float $mass): void
    {
        $this->mass = $mass;
    }


}