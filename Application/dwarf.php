<?php
class dwarf extends Character implements weapon, classe {

public function __construct (string $name){
    $this ->name = $name;
    $this ->hp = 100;
     $this ->stamina = 60;
     $this ->strenght = 60 ;
     $this ->statut = true;
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
public function setStrenght(int $strenght){
    $this ->strenght = $strenght;
}
public function getStrenght(){
        return $this ->strenght;
}
public function setStatut(bool $statut){
    $this ->statut = $statut;
}
public function getStatut(){
        return $this ->statut;
}
//WEAPONS

public function sword(){}

public function bow(){}

public function axe(){
    $this -> strenght = 150;
}

public function scepter(){}

public function daguer(){}

public function staff(){}

//CLASSES

public function knight(){}

public function mage(){}

public function warrior(){}

public function necromencer(){}

public function rogue(){}

public function priest(){}



}