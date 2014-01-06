<div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <!-- Partie de la barre toujours affichee -->
    <div class="navbar-header">
        <!-- Bouton affiché a droite si la zone d'affichage est trop petite -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Activer la navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Lien de retour à la page d'accueil -->

        <a class="navbar-brand" href="accueil/index">Aion Script</a>
    </div>
    <!-- Partie de la barre masquée en fonction de la zone d'affichage -->
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accueil du majordome <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="majordome">Les bases</a></li>
                    <li><a href="majordome/personnalisation">Personnalisation du texte</a></li>
                    <li><a href="majordome/modificationduson">Modification du son</a></li>
                </ul>
            </li>
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Musique <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="musique">Les notes</a></li>
                    <li><a href="musique/tempo">Le tempo</a></li>
                    <li><a href="musique/exemples">Quelques exemples</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php
            if (isset($client)) {
                ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenue, <?= $this->nettoyer($client['CLIE_PRENOM']) ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="client">Informations personnelles</a></li>
                        <li><a href="connexion/deconnecter">Déconnexion</a></li>
                    </ul>
                </li>
                <?php
            } else {
                ?>
                <li><a class="enTete" href="connexion">Se Connecter</a></li>
                <?php } ?>
        </ul>
    </div>
</div>
</header>