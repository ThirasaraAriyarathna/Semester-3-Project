<?php

class Supplier {

    private $name;
    private $teleNo;
    private $supplyTransactions = array();
    private $supplierNo;

    public function __construct($name, $telNo) {
        $this->name = $name;
        $this->teleNo = $telNo;
    }

    public function getName() {
        return $this->name;
    }

    public function getTeleNo() {
        return $this->teleNo;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setTeleNo($teleNo) {
        $this->teleNo = $teleNo;
    }

}
