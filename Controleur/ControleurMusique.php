<?php
require_once 'Controleur/ControleurPersonalise.php';
require_once 'Framework/Controleur.php';

class ControleurMusique extends Controleur {
    
    public function __construct() {
        
    }
    
    public function index () {
        $this->genererVue();
    }
    
    public function tempo() {
        $this->genererVue();
    }
    
    public function exemples() {
        $this->genererVue();
    }
}