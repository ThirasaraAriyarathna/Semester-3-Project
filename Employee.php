<?php

abstract class Employee {

    private $name;
    private $nicNo;
    private $gender;
    private $teleNo;
    private $address;
    private $post;

    public function __construct($name, $nicNo, $gender) {
        $this->name = $name;
        $this->gender = $gender;
        $this->nicNo = $nicNo;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setPost($post) {
        $this->post = $post;
    }

    public function setTeleNo($teleNo) {
        $this->teleNo = $teleNo;
    }

    public function getName() {
        return $this->name;
    }

    public function getNICNo() {
        return $this->nicNo;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getPost() {
        return $this->post;
    }

    public function getTelNo() {
        return $this->teleNo;
    }

}
