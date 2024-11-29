<?php
abstract class Character {
// Protected properties for character attributes
    protected string $name;
    protected int $hp;
    protected int $stamina;
    protected int $shield;
    protected int $Strength;
    protected bool $statut;

public function __construct (string $name, int $hp, int $stamina, int $Strength, bool $statut){
    $this ->name = $name;
    $this ->hp = $hp;
    $this ->stamina = $stamina;
    $this ->Strength = $Strength;
    $this ->shield = $shield;
    $this ->statut = $statut;
}

public function attack(){
    return $this -> Strength;
}

public function defend(){
    return $this -> stamina;
}

public function  die(){}

public function CrashTheGameIfLoose(){}
}