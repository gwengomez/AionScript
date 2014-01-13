<?php

require_once 'Framework/Modele.php';

class Client extends Modele {
    
    private $sqlClient = "SELECT * FROM t_client ";
    
    public function connecter($login, $mdp)
    {
        $sql = "select clie_id from t_client where clie_login=? and clie_mdp=?";
        $client = $this->executerRequete($sql, array($login, $mdp));
        return ($client->rowCount() == 1);
    }
    
    public function getClient($login, $mdp) {
        $req = $this->sqlClient . "where clie_login=? and clie_mdp=?";
        $client = $this->executerRequete($req, array($login, $mdp));
        if ($client->rowCount() == 1)
            return $client->fetch();
        else
            throw new Exception ("L'utilisateur n'a pas été reconnu");
    }
    
    //Ajout d'un client
    public function  ajoutClient($login, $nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp) {
        $sql = "insert into t_client (CLIE_LOGIN, CLIE_NOM, CLIE_PRENOM, CLIE_ADRESSE, CLIE_CP, CLIE_VILLE, CLIE_COURRIEL, CLIE_MDP) values (?, ?, ?, ?, ?, ?, ?, ?);";
        $ajoutClient = $this->executerRequete($sql, array($login, $nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp));
        return $ajoutClient;
    }
    
    public function modificationClient($id, $nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp) {
        $sql = "update t_client set clie_nom=?, clie_prenom=?, clie_adresse=?, clie_cp=?, clie_ville=?, clie_courriel=?, clie_mdp=? where clie_id=?;";
        $modificationClient = $this->executerRequete($sql, array($nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp, $id));
        return $modificationClient;
    }
    
    public function existeCourrielLogin($courriel, $login) {
        $sql = "select clie_id from t_client where clie_courriel=? or clie_login=?";
        $nbCourriel = $this->executerRequete($sql, array($courriel, $login));
        $existe = false;
        if ($nbCourriel->rowCount() == 1)
            $existe = true;
        
    }
}
