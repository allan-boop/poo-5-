<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    private bool $lightStatus = false;

    public function switchOn(): string
    {
        if($this->getCurrentSpeed() > 10){
            $this->lightStatus = true;
            return 'The light is on' . PHP_EOL;
        }
        else{
            return 'The light is off' . PHP_EOL;
        }
    }

    public function switchOff(): string
    {
       $this->lightStatus = false;
         return 'The light is off';
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