<?php

abstract class Visa{
    public function visaPayment(): string
    {
        return "Perform a payment";
    }
    //Ako napravimo jednu funkciju da je abstraktna moramo to da ucinimo i sa klasom
    abstract public function getPayment();


}