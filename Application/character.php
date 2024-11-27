<?php
abstract class Character {
    protected string $name;
    protected int $hp;
    protected int $stamina;
    protected int $strenght;
    protected bool $statut;

public function __construct (string $name, int $hp, int $stamina, int $strenght, bool $statut){
    $this ->name = $name;
    $this ->hp = $hp;
    $this ->stamina = $stamina;
    $this ->strenght = $strenght;
    $this ->statut = $statut;
}

public function attack(){}

public function defend(){}

public function  die(){}

public function CrashTheGameIfLoose(){}
}