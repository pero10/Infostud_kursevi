<?php

class House{
    public string $streetName;
    public int $streetNr;

    public function __construct(string $streetName, int $streetNr){
        $this->streetName = $streetName;
        $this->streetNr = $streetNr;
    }

    public function getAddress(): string
    {
        return $this->streetName . " " . $this->streetNr;
    }
}
