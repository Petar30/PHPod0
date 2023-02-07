<?php
class Bank
{
    public $accno;
    public $clientname;
    public $balance;
    public $newBalance;

    function depositAmount($amt)
    {
        $this->newBalance = $this->balance + $amt;
    }
    function deductAmount($amt)
    {
        if ($amt > $this->newBalance) {
            echo "Dear $this->clientname, your bank account can not pay this purchase beacuse you dont have enough money on your bank account." . "Your balance is: $this->newBalance, required $amt." . PHP_EOL;;
        }
        if ($amt == $this->newBalance) {
            echo "Dear $this->clientname, your purchase is successfully approved, remaining balance: 0$" . PHP_EOL;
        }
        if ($amt < $this->newBalance) {
            $remainingBalance = $this->newBalance - $amt;
            echo "Dear $this->clientname, your purchase is successfuly approved, remaining balance: $remainingBalance$" . PHP_EOL;
        }        
    }
    function checkBalance()
    {
        echo "Dear $this->clientname, your balance is: $this->newBalance" . PHP_EOL;
    }
    function checkAccountNumber()
    {
        echo "Dear $this->clientname, your account number is: " .  $this->accno . PHP_EOL;
    }
}
$user1 = new Bank();
$user1->accno = 69;
$user1->clientname = "Petar";
$user1->balance = 25000;

$user1->depositAmount(75000);
$user1->deductAmount(20000);
$user1->checkAccountNumber();
