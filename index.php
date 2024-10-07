<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class VendorMachine {
    private $isOn;
    private $snacksQty;
    private $money;

    public function __construct(){
        $this->isOn = false;
        $this->snacksQty = 50;
        $this->money = 0;
    }

    public function buySnacks(): void{
        $this->isOn = true;
        if ($this->snacksQty < 1) {
            throw new Error(message: 'machine vide !');
        }
        $this->money = +2;
    }

    public function resetVendor(): void {
        $this->isOn = false;
        $this->snacksQty = $this->calculateLeftSnacksQty();
        $this->money = 0;
        $this->isOn = true;
    }

    private function calculateLeftSnacksQty(): int {
        return $this->snacksQty + (50 - $this->snacksQty);
    }

    public function shootWithFoot(): void {
        $this->isOn = false;
        $this->dropMoney();
    }

    private function dropMoney(): void {
        $moneyToDrop = 20;

        if($this->money < 20) {
            $moneyToDrop = $this->money;
        }
        $this->money = $this->money - $moneyToDrop;
    }

    private function dropSnacks(): void {
        $snacksToDrop = 5;

        if ($this->snacksQty < 5) {
            $this->snacksQty = $this->snacksQty - $snacksToDrop;
        }
    }

};

$vendorMachine = new VendorMachine();

echo $vendorMachine.snacksQty();