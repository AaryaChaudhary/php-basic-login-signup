<?php

class BankAccount {

    public $customerName;

    public $amount;

    public  $accountType;

    function __construct($co, $a, $at) {
      $this-> customerName = $co;
      $this->amount = $a;
      $this->accountType = $at;
    }

    function deposit($a) {
        $this->amount += $a;
        echo "Amount is deposited. "."<br/>";
    }

    function withdraw($a) {
        if($this->amount >= $a) {
            $this->amount -=$a;
            echo "Amount is withdrawn. "."<br/>";
        } else {
            echo "Insufficient balance. "."<br/>";
        }
    }

    function enquiry() {
        echo "Balance : ".$this->amount."<br/>";

    }

}

$arya = new BankAccount('Chaudhary', 1000, "Saving");
$arya->enquiry();
$arya-> deposit(5000);
$arya->enquiry();
$arya->withdraw(5000);
$arya->enquiry();
$arya->withdraw(50000);
$arya->enquiry();
?>
