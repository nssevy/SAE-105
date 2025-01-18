<?php
    $couleur_bulle_classe = "rose";
    $couleur_bordure_classe = "bordeau";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCUEIL | BUT MMI</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css-élève/style-footer.css">
    <link rel="stylesheet" href="ressources/css-élève/style-accueil.css">
    <link rel="stylesheet" href="ressources/css-élève/style-header-eleve.css?v=<?php echo time(); ?>">
    

    <!-- Vous n'avez pas besoin de ce fichier sur les autres pages. Ca allège le temps de chargement et diminue la consommation d'électricité -->
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-accueil.css">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
            <h1 class="titre-page">Articles sur le BUT MMI</h1>

            <section class="colonne">
                <section class="liste-articles"> 
                    <div class="contenu">
                    <img src="ressources/images/BUT-MMI-1.png" >
                   
                    <a class="lien" href="https://blogdummi.fr/le-programme-du-but-mmi.html"> Le programme </a> 
                </section>
                <a class="jpo-banniere" title="Ouverture dans un nouvel onglet" href="https://www.cyu.fr/salons-journee-portes-ouvertes">
                    <img src="ressources/images/logo-cyu-blanc.png" width="200" class="logo" alt="">
                    
                    <section class="textes">
                        <p class="txt-petit">Journée portes ouvertes</p>
                        <p class="txt-grand">
                            27/01/2024, <br />
                            de 10h à 17h
                        </p>
                        <p class="en-savoir-plus">EN SAVOIR PLUS</p>
                    </section>
                </a>
            </section>
        </main>

    </section>
</body>

<footer>
    <?php require_once('./ressources/includes/footer.php'); ?>
</footer>

</html>