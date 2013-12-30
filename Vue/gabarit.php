<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <base href="<?= $this->nettoyer($racineWeb) ?>" >
        <title><?= $this->nettoyer($titre) ?></title>

        <link rel="stylesheet" type="text/css" href="Contenu/design.css">
        <link rel="icon" type="image/png" href="Contenu/images/icone.png" />
        <link href="Librairies/bootstrap/css/bootstrap-theme.css" rel="stylesheet" media="screen">
        <link href="Librairies/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <link href="Librairies/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">  
        <link href="Librairies/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="global">
            <header>
                <!--NAVBAR-->
                <?php require 'Vue/_Commun/barreNavigation.php'; ?>
                <!--FIN NAVBAR-->
             

            <?= $contenu ?>
            <!-- #contenu -->
            <footer id="piedBlog">
                <center><p class="footer">Site réalisé par Eponyia, gladiatrice 65 sur suthran.</p></center>
            </footer>
        </div> 
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="Librairies/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>