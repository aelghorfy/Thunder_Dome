<?php
//interface instead of class, bc can't do multiple extends
interface weapon {
    public function sword();
    public function bow();
    public function axe();
    public function scepter();
    public function daguer();
    public function staff();

}