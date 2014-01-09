<?php
$this->titre = "Connexion";
?>

<div class="row">
    <!--<div class="col-md-1">
    </div>-->
    <br /><br />
    <div class="col-md-6 col-md-offset-3">
        <ul class="nav nav-tabs nav-justified">
            <li <?php if (!isset($inscription)) echo "class='active'"; ?>><a href="#connexion" data-toggle="tab">Connexion</a></li>
            <li <?php if (isset($inscription)) echo "class='active'";?>><a href="#inscription" data-toggle="tab">Inscription</a></li>
        </ul>
        <br />
        
        <div class="tab-content">
            
            <!--Connexion-->
            <div class="tab-pane fade<?php if (!isset($inscription)) echo " in active"; ?>" id="connexion">
                <?php
                if (isset($msgErreurConnexion)) {
                    echo "<div class='alert alert-danger'>".$this->nettoyer($msgErreurConnexion)."</div>";
                }
                ?>
                <form class="form-signin form-horizontal" role="form" action="connexion/connecter" method="post">
                    <input name="courriel" type="email" class="form-control" placeholder="Entrez votre courriel : " value="eponia22@gmail.com" required autofocus><br />
                    <input name="mdp" type="password" class="form-control" placeholder="Entrez votre mot de passe : " value="123" required><br />
                    <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Connexion</button>
                </form>
            </div>

            <!--Inscription-->
            <div class="tab-pane fade<?php if (isset($inscription)) echo " in active"; ?>" id="inscription">
                <?php
                if (isset($msgErreurInscription)) {
                    echo "<div class='alert alert-danger'>".$this->nettoyer($msgErreurInscription)."</div>";
                }
                ?>
                <form class="form-signin form-horizontal" role="form" action="connexion/inscription" method="post">
                    <p>Veuillez remplir le formulaire suivant pour vous inscrire : </p>
                    <p><label>Nom<span class="obligatoire">*</span> : </label></p><input name="nom" type="text" class="form-control" required autofocus><br />
                    <p><label>Prénom<span class="obligatoire">*</span> : </label></p><input name="prenom" type="text" class="form-control" required><br />
                    <p><label>Adresse<span class="obligatoire">*</span> : </label></p><input name="adresse" type="text" class="form-control" required><br />
                    <p><label>Code postal<span class="obligatoire">*</span> : </label></p><input name="cp" type="text" class="form-control" required><br />
                    <p><label>Ville<span class="obligatoire">*</span> : </label></p><input name="ville" type="text" class="form-control" required><br />
                    <p><label>Courriel<span class="obligatoire">*</span> : </label></p><input name="courriel" type="email" class="form-control" required><br />
                    <p><label>Mot de passe<span class="obligatoire">*</span> : </label></p><input name="mdp" type="password" class="form-control" required><br />
                    <br /><button type="submit" class="btn btn-default"> Inscription</button>
                    <br /><p class="obligatoire"><span >Les champs suivi de * sont obligatoires.</span></p>
                    <?php if (isset ($erreur)) echo "<div class='alert alert-danger'> $erreur </div>"; ?>
                </form>
            </div>
            
        </div>
    </div>
</div>

