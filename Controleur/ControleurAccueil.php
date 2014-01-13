<?php
require_once 'Controleur/ControleurPersonalise.php';
require_once 'Framework/Controleur.php';

class ControleurAccueil extends ControleurPersonalise {
    
    public function __construct() {
        
    }
    
    public function index () {
        $this->genererVue(array(), 'index');
    }
    
}