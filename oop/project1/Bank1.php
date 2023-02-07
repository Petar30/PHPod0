<?php
class Bank1
{
    public $accno;
    public $clientname;
    public $balance;

    function depositAmount($amt)
    {
        $this->balance = $this->balance + $amt;
    }
    function deductAmount($amt)
    {
        if ($amt > $this->balance) {
            echo "Dear $this->clientname, your bank account can not pay this purchase because you dont have enough money." . PHP_EOL;
        }
        if ($amt == $this->balance) {
            echo "Dear $this->clientname, purchase is approved." . PHP_EOL;
            $this->balance = 0;
        }
        if ($amt < $this->balance) {
            echo "Dear $this->clientname, payment successfully approved.";
        }
    }
}

