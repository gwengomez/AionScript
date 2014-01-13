<?php
require_once 'Framework/Controleur.php';

/**
 * Classe parente des contrôleurs soumis à authentification
 *
 */
abstract class ControleurPersonalise extends Controleur
{
    public function genererVue($donnees = array(), $action = null)
    {
        if ($this->requete->getSession()->existeAttribut("idClient"))
        {
            $login = $this->requete->getSession()->getAttribut("loginClient");
            $mdp = $this->requete->getSession()->getAttribut("mdpClient");
            $client = $this->client->getClient($login, $mdp);
            parent::genererVue($donnees + array('client' => $client), $action);
        }
        else
            parent::genererVue($donnees, $action);
    }
}