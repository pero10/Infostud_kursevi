<?php
//interfaces
//klase koje implementuju interface moraju da sadrze metode koje interface poseduje u sebi
interface PaymentInterface{
    public function payNow();
}

interface LoginInterface{
    public function loginFirst();
}

class PayPal implements PaymentInterface, LoginInterface{
    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}

class BankTransfer implements PaymentInterface, LoginInterface{
    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}

class Visa implements PaymentInterface {
    public function payNow(){}
    public function paymentProcess(){
        $this->payNow();
    }
}

class Cash implements PaymentInterface {
    public function payNow(){}
    public function paymentProcess(){
        $this->payNow();
    }
}

class BuyProducts{
    //Ako postavimo objekat da je tip neke klase onda mozemo bez problema da pristupimo njegovim
    //metodama i propertijima
    //isto tako mozemo da koristimo i ime interface
    public function pay(PaymentInterface $paymentType){
        //Metoda payNow je metoda koja se koristi u klasi Cash
        $paymentType->paymentProcess();
        $paymentType->payNow();
    }
}


$paymentType = new Cash();
$buyProducts = new BuyProducts();
$buyProducts->pay($paymentType);