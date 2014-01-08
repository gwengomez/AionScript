<?php

require_once 'Controleur/ControleurPersonalise.php';

/**
 * Classe parente des contrôleurs soumis à authentification
 *
 */
abstract class ControleurSecurise extends ControleurPersonalise
{
    public function executerAction($action)
    {
        // Vérifie si les informations utilisateur sont présents dans la session
        // Si oui, l'utilisateur s'est déjà authentifié : l'exécution de l'action continue normalement
        // Si non, l'utilisateur est renvoyé vers le contrôleur de connexion
        if ($this->requete->getSession()->existeAttribut("idVisiteur")) {
            parent::executerAction($action);
   
        }
        else {
            $this->rediriger("connexion");
        }
    }
}