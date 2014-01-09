<?php
require_once 'Controleur/ControleurPersonalise.php';
require_once 'Framework/Controleur.php';

class ControleurMajordome extends ControleurPersonalise {
    
    public function __construct() {
        
    }
    
    public function index () {
        $this->genererVue();
    }
    
    public function personnalisation() {
        $this->genererVue();
    }
    
    public function modificationduson() {
        $this->genererVue();
    }
}