<?php
class elf extends Perso implements weapon, classe {

public function __construct (string $name, int $hp, int $stamina, int $strenght, bool $statut){
    $this ->name = $name;
    $this ->hp = $hp;
     $this ->stamina = $stamina;
     $this ->strenght = $strenght;
     $this ->statut = $statut;
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




}