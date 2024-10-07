<?php
class VendorMachine {
    private $isOn;
    private $snacksQty;
    private $money;

    public funtion __construct(){
        $this->isOn = false;
        $this->snacksQty = 50;
        $this->money = 0;
    };

    public function buySnacks(){
        $this->isOn = true;
        if ($this->snacksQty < 1){
            throw new Error('machine vide !')
        };
        $this->money = +2;
    };

    public function reset() {
        $this->isOn = false;
        $this->snacksQty = $this->calculateLeftSnacksQty();
        $this->money = 0;
        $this->isOn = true;
    };

    private function calculateLeftSnackQty() {
        echo $this->snacksQty + (50 - $this->snacksQty);
    };

    public function shootWithFoot() {
        $this->isOn = false;
        $this->dropMoney;
    };

    private function dropMoney() {
        $moneyToDrop = 20;

        if($this->money < 20) {
            $moneyToDrop = $this->money
        };
        $this->money = $this->money - $moneyToDrop;
    };

    private dropSnacks() {
        $snacksToDrop = 5;

        if ($this->snacksQty < 5) {
            $snacksToDrop = $this->snacksQty
        };
    };

};

$vendorMachine = new VendorMachine();

vendorMachine.reset();
vendorMachine.shootWithFoot();
vendorMachine.buySnacks();