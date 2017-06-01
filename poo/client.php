<?php

/*
 * Descripcion de Tipo de producto
 * Clase donde se maneja el objeto cliente,
 * @author Alberth Calderon Alvarado
 */

class client {
    
    public $idClient;
    public $emailClient;
    public $userClient;
    public $passwordClient;
    public $nameClient;
    public $lastNameFClient;
    public $lastNameSClient;
    public $bornClient;
    public $sexClient;
    public $telephoneClient;
    public $provinceClient;
    public $cantonClient;
    public $districtClient;
    public $addressClient1;
    public $addressClient2;
    public $active;
    public $userType;

    public function Client() {
        $this->emailClient = "";
        $this->userClient = "";
        $this->passwordClient ="";
        $this->nameClient = "";
        $this->lastNameFClient = "";
        $this->lastNameSClient = "";
        $this->bornClient = "";
        $this->sexClient = "";
        $this->telephoneClient = "";
        $this->provinceClient = "";
        $this->cantonClient = "";
        $this->districtClient = "";
        $this->addressClient1 = "";
        $this->addressClient2 = "";
        $this->active='1';
        $this->userType=0;
        
    }

    
     static function ClientInvoice($name,$surname1,$surname2) {
        
        return new self($name,$surname1,$surname2,"","","","");
       
    }
    

    public function getIdClient() {
        return $this->idClient;
    }

    public function getEmailClient() {
        return $this->emailClient;
    }

    public function getUserClient() {
        return $this->userClient;
    }

    public function getPasswordClient() {
        return $this->passwordClient;
    }

    public function getNameClient() {
        return $this->nameClient;
    }

    public function getLastNameFClient() {
        return $this->lastNameFClient;
    }

    public function getLastNameSClient() {
        return $this->lastNameSClient;
    }

    public function getBornClient() {
        return $this->bornClient;
    }

    public function getSexClient() {
        return $this->sexClient;
    }

    public function getTelephoneClient() {
        return $this->telephoneClient;
    }

    public function getProvinceClient() {
        return $this->provinceClient;
    }

    public function getCantonClient() {
        return $this->cantonClient;
    }

    public function getDistrictClient() {
        return $this->districtClient;
    }

    public function getAddressClient1() {
        return $this->addressClient1;
    }

    public function getAddressClient2() {
        return $this->addressClient2;
    }

    public function setIdClient($idClient) {
        $this->idClient = $idClient;
    }

    public function setEmailClient($emailClient) {
        $this->emailClient = $emailClient;
    }

    public function setUserClient($userClient) {
        $this->userClient = $userClient;
    }

    public function setPasswordClient($passwordClient) {
        $this->passwordClient = $passwordClient;
    }

    public function setNameClient($nameClient) {
        $this->nameClient = $nameClient;
    }

    public function setLastNameFClient($lastNameFClient) {
        $this->lastNameFClient = $lastNameFClient;
    }

    public function setLastNameSClient($lastNameSClient) {
        $this->lastNameSClient = $lastNameSClient;
    }

    public function setBornClient($bornClient) {
        $this->bornClient = $bornClient;
    }

    public function setSexClient($sexClient) {
        $this->sexClient = $sexClient;
    }

    public function setTelephoneClient($telephoneClient) {
        $this->telephoneClient = $telephoneClient;
    }

    public function setProvinceClient($provinceClient) {
        $this->provinceClient = $provinceClient;
    }

    public function setCantonClient($cantonClient) {
        $this->cantonClient = $cantonClient;
    }

    public function setDistrictClient($districtClient) {
        $this->districtClient = $districtClient;
    }

    public function setAddressClient1($addressClient1) {
        $this->addressClient1 = $addressClient1;
    }

    public function setAddressClient2($addressClient2) {
        $this->addressClient2 = $addressClient2;
    }
  
    public function getActive() {
        return $this->active;
    }

    public function getUserType() {
        return $this->userType;
    }

    public function setActive($active) {
        $this->active = $active;
    }

    public function setUserType($userType) {
        $this->userType = $userType;
    }




}
