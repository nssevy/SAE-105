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
                    <img src="ressources/images/image-défaut.png" >
                    <a class="p1" href="https://www.letudiant.fr/etudes/dut/but-mmi-metiers-du-multimedia-et-de-l-internet.html"> 
                     La formation </a> 
                          <p class="p2"> Le BUT MMI (Métiers du Multimédia et de l'Internet) est une formation en trois ans qui prépare aux métiers du numérique, en combinant créativité et technologies. Elle permet d’acquérir des compétences en communication digitale, développement web et design. Pour en savoir plus sur cette formation, cliquez sur le lien ci-dessus qui vous redirigera vers une page dédiée. </p>
</div>
<div class="contenu">
                    <img src="ressources/images/image-défaut.png">
                    <a class="p1"href="https://blogdummi.fr/le-programme-du-but-mmi.html" > 
                        Le programme</a>
                    <p class="p2"> Le BUT MMI (Métiers du Multimédia et de l'Internet) propose un programme varié alliant communication, développement web, design et gestion de projet. Au fil des trois années, les étudiants acquièrent des compétences en création numérique, stratégie digitale et production audiovisuelle. Pour découvrir le détail du programme, cliquez sur le lien ci-dessus qui vous redirigera vers une page dédiée. </p>
</div>
<div class="contenu">
                    <img src="ressources/images/image-défaut.png">
                    <a class="p1"href="https://diplomeo.com/actualite-que_faire_apres_un_but_mmi" > 
                          Les poursuites d'études </a> 
                    <p class="p2"> Le BUT MMI (Métiers du Multimédia et de l'Internet) ouvre de nombreuses possibilités de poursuites d’études. Après l’obtention du diplôme, les étudiants peuvent intégrer des masters en communication, design, marketing digital ou développement web, ou encore des écoles spécialisées. Ces formations permettent de se spécialiser davantage et d’accéder à des postes à plus hautes responsabilités. Pour en savoir plus sur les poursuites d’études, cliquez sur le lien ci-dessus qui vous redirigera vers une page dédiée.. </p>
</div>
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