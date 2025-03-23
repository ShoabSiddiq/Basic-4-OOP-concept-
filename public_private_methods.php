<?php
class Fund
{
   private $fund;
    function __construct($initialFund = 0)
    {
        $this->fund = $initialFund;
    }
    public function addFund($money)
    {
        $this->fund += $money;
    }
    public function deductFund($money)
    {
        $this->fund -= $money;
    }
    public function getTotal()
    {
        echo "Total fund is {$this->fund}\n";
    }
}
$ourFund = new Fund(100);
// $ourFund->fund=75; using directly only public cases
$ourFund->getTotal();
$ourFund->addFund(10);
$ourFund->getTotal();
$ourFund->deductFund(130);
$ourFund->getTotal();
