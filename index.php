<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class VendorMachine {
    private bool $isOn;
    private int $snacksQty;
    private int $money;

    public function __construct(){
        $this->isOn = false;
        $this->snacksQty = 50;
        $this->money = 0;
    }

    public function buySnacks(): void{
        $this->isOn = true;
        if ($this->snacksQty < 1) {
            throw new Exception(message: 'machine vide !');
        }
        $this->snacksQty = $this->snacksQty - 1;
        $this->money = $this->money + 2;
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

    public function shootWithFoot(): string {
        $this->isOn = false;
        $this->dropMoney();

        return "snacks tombés : {$this->snacksQty} et monnaie : {$this->money}";
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

echo $vendorMachine->shootWithFoot();