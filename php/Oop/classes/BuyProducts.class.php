<?php

include_once "paymentTypes.class.php";

//abstraktna klasa se koristi kad smo sigurni da nam ta klasa nece biti
//potrebna da se pristupi direktno nego cemo jedino pristupati toj klasi
//preko neke druge klase

class BuyProduct extends Visa
{

    //Ako klasa nasledjuje abstraktnu klasu onda mora da ima metode koje ima ta abstraktna klasa
    public function getPayment(): string
    {
        return $this->visaPayment();
    }
}
