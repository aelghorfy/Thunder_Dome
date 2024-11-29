<?php
class dwarf extends Character implements weapon, classe {
// Protected properties for dwarf attributes
public function __construct (string $name){
    $this ->name = $name;
    $this ->hp = 110;
     $this ->stamina = 60;
     $this ->strength = 60 ;
     $this ->shield = 80;
     $this ->statut = true;
     $this ->weaponName ="Hands";
     $this ->WeaponStrength = 0;
}

public function setName(string $name){
    $this -> name = $name;
}
public function getName(){
    return $this -> name;

}
public function sethp(int $hp){
    $this ->hp = $hp;
}
public function gethp(){
    return $this ->hp;
}
public function setStamina(int $stamina){
    $this ->stamina = $stamina;
}
public function getStamina(){
    return $this ->stamina;
}
public function setStrength(int $strength){
    $this ->strength = $strength;
}
public function getStrength(){
        return $this ->strength;
}
public function setShield(int $shield){
    $this ->shield = $shield;
}
public function getShield(){
    return $this ->shield;
}
public function setStatut(bool $statut){
    $this ->statut = $statut;
}
public function getStatut(){
        return $this ->statut;
}
public function getWeaponName(){
    return $this ->weaponName;
}
public function getWeaponStrength(){
    return $this ->weaponStrength;
}
//WEAPONS

public function sword(){
    $this -> weaponStrength = 5;
    $this -> weaponName = "Sword";
}

public function bow(){
    $this -> weaponStrength = 0;
    $this -> weaponName = "Bow";
}

public function axe(){
    $this -> weaponStrength = 20;
    $this -> weaponName = "Axe";
}

public function scepter(){
    $this -> weaponStrength = 0;
    $this -> weaponName = "Scepter";
}

public function daguer(){
    $this -> weaponStrength = 0;
    $this -> weaponName = "Daguer";
}

public function staff(){
    $this -> weaponStrength = 0;
    $this -> weaponName = "Staff";
}

//CLASSES

public function ranger(){}

public function mage(){}

public function warrior(){}

public function necromancer(){}

public function rogue(){}

public function priest(){}

public function attack(){
    return $this -> Strength;
}

public function defend(){
    return $this -> stamina ;
}

public function  die(){
    return $this -> statut = false;
}

}