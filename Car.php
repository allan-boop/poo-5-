<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private bool $lightStatus = false;

    private string $energy;

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function switchOn(): string
    {
        $this->lightStatus = true;
        return 'The light is on' . PHP_EOL;
    }

    public function switchOff(): string
    {
       $this->lightStatus = false;
         return 'The light is off' . PHP_EOL;
    }
    
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * Get the value of lightStatus
     *
     * @return bool
     */
    public function getLightStatus(): bool
    {
        return $this->lightStatus;
    }

    /**
     * Set the value of lightStatus
     *
     * @param bool $lightStatus
     *
     * @return self
     */
    public function setLightStatus(bool $lightStatus): self 
    {
        $this->lightStatus = $lightStatus;

        return $this;
    }
}