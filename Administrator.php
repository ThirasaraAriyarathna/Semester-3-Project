<?php

class Administrator {

   private static $admin=NULL;
    private $userName;
    private $password;
    private static $transactions=array();
    private $cheque;


    private function _construct() {
        
    }
    
    
    public static function getAdmin(){
        if(Administrator::$admin==NULL){
            Administrator::$admin=new Administrator ($un,$pw);
            
            
        }
                return Administrator::$admin;

    }

    public function getTransactionArray(){
        return $this->transactions;
    }


    public function getUserName() {
        return $this->userName;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function addEmployee($name, $nicNo, $gender, $teleNo, $address, $post, $userName, $password) {
        if ($post == "Labourer") {
            $labourer = new Labourer($name, $nicNo, $gender);
        } else if ($post == "Clerk") {
            $clerk = new Clerk($name, $nicNo, $gender, $userName, $password);
        }
    }

    public function searchEmployee($name) {
        
    }

    public function updateEmployee($name, $nicNo, $gender, $teleNo, $address, $post, $userName, $password) {
        
    }

    public function getSalaryReport() {
        
    }

    public function getETF_EPF() {
        
    }

    public function creatOrder($orderNo) {
        
    }

    public function createSupplyTransaction($supplyTransNo) {
        
    }

    public function searchCustomer($customerName) {
        
    }

    public function updateCustomer($name, $telNo, $nameOfShop) {
        
    }

    public function updateSupplier($name, $telNo) {
        
    }

    public function searchSupplier($supplierName) {
        
    }

    public function markingAttendance() {
        
    }

    public function getBusinessReport() {
        
    }

    public function getSettledChequeRoport() {
        
    }

    public function getNonSettledChequeRoport() {
        
    }

    public function getReturnedChequeRoport() {
        
    }

    public function addPaddyToStock($amount, $type) {
        
    }

    public function addRiceToStock($amount, $type) {
        
    }

    public function addFlourToStock($amount, $type) {
        
    }

    public function getRiceFromStock($amount, $type) {
        
    }

    public function getPaddyFromStock($amount, $type) {
        
    }

    public function getFlourFromStock($amount, $type) {
        
    }

    public function addnewCustomer($name, $telNo, $nameOfShop) {
        
    }

    public function addnewSupplier($name, $telNo) {
        
    }

}
