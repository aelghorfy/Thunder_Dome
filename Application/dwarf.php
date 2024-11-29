<?php
class dwarf extends Character implements weapon, classe {
// Protected properties for dwarf attributes
public function __construct (string $name){
    $this ->name = $name;
    $this ->hp = 100;
     $this ->stamina = 60;
     $this ->strength = 30 ;
     $this -> shield = 80;
     $this ->statut = true;
     $this ->weaponName ="Hands";
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
//WEAPONS

public function sword(){}

public function bow(){}

public function axe(){
    $this -> weaponName = "Axe";
}

public function scepter(){}

public function daguer(){}

public function staff(){}

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