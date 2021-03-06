<?php
require_once 'Controleur/ControleurPersonalise.php';
require_once 'Modele/Client.php';

/**
 * Contrôleur gérant la connexion au site
 */
class ControleurConnexion extends ControleurPersonalise {
    
    private $client;

    public function __construct() {
        $this->client = new Client();
    }

    public function index()
    {
        if ($this->requete->getSession()->existeAttribut("idClient"))
            $this->rediriger('accueil');
        else
            $this->genererVue();
    }

    public function connecter() {
        if ($this->requete->existeParametre("login") && $this->requete->existeParametre("mdp")) {
            $login = $this->requete->getParametre("login");
            $mdp = $this->requete->getParametre("mdp");
            
            if ($this->client->connecter($login, $mdp)) {
                $client = $this->client->getClient($login, $mdp);
                $this->requete->getSession()->setAttribut("idClient", $client['CLIE_ID']);
                $this->requete->getSession()->setAttribut("loginClient", $client['CLIE_LOGIN']);
                $this->requete->getSession()->setAttribut("mdpClient", $client['CLIE_MDP']);
                $this->rediriger("accueil");
                }
                else
                    $this->genererVue(array('msgErreurConnexion' => 'Login ou mot de passe incorrects'),"index");
        }
        else
            throw new Exception("Action impossible : login ou mot de passe non défini");
    }
    

    public function inscription()
    {
       if ($this->requete->existeParametre("login") && $this->requete->existeParametre("nom") && $this->requete->existeParametre("prenom") && $this->requete->existeParametre("adresse") && $this->requete->existeParametre("cp") && $this->requete->existeParametre("ville") && $this->requete->existeParametre("courriel") && $this->requete->existeParametre("mdp")) {
           $login = $this->requete->getParametre("login");
           $nom = $this->requete->getParametre("nom");
           $prenom = $this->requete->getParametre("prenom");
           $adresse = $this->requete->getParametre("adresse");
           $cp = $this->requete->getParametre("cp");
           $ville = $this->requete->getParametre("ville");
           $courriel = $this->requete->getParametre("courriel");
           $mdp = $this->requete->getParametre("mdp");
           
           if (!$this->client->existeCourrielLogin($courriel, $login)) {
               
                $this->client->ajoutClient($login, $nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp);

                if ($this->client->connecter($login, $mdp)) {
                     $client = $this->client->getClient($login, $mdp);
                     $this->requete->getSession()->setAttribut("idClient", $client['CLIE_ID']);
                     $this->requete->getSession()->setAttribut("loginClient", $client['CLIE_LOGIN']);
                     $this->requete->getSession()->setAttribut("mdpClient", $client['CLIE_MDP']);
                     $this->rediriger("accueil");
                 }
                 else
                     $this->genererVue(array('msgErreur' => 'Login ou mot de passe incorrects', 'styles' => $styles),"index");
            }
            else
                $this->genererVue(array('msgErreurInscription' => 'Cette adresse mail est déjà utilisée.', 'styles' => $styles, 'inscription' => 'ko'),"index");
       }
    }

    public function deconnecter() {
        $this->requete->getSession()->detruire();
        $this->rediriger("accueil");
    }

}
