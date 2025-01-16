<?php
    $couleur_bulle_classe = "noir";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIEUX DE VIE | BUT MMI</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="lieu-de-vie-css/css/ne-pas-modifier/header.css">
    <link rel="stylesheet" href="lieu-de-vie-css/css/ne-pas-modifier/lieux-de-vie.css">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <main class="conteneur-principal">
            <h1 class="titre-page">Lieux de vie</h1>

            <section class="ldv">

                <section class="description, box">
                    <p>
                        Entre les cours, l'université et ses IUT proposent de nombreux lieux de convivialité ou 
                        d'idéation. Divers et variés, ils permettent aux étudiants, de toute formation, de découvrir 
                        de nouveaux horizons et surtout de rencontrer les étudiants d'autres BUT.
                    </p>
                </section>
                <br>
                <section class="bibliothèque, box">
                    <div class="contenu">
                    <img src="ressources/images/bu.webp" alt="Bibliothèque universitaire">
                        <div class="texte">
                            <h2>Bibliothèque universitaire</h2>
                            <p>
                                La bibliothèque universitaire est un atout indispensable à votre réussite. Elle met à 
                                votre disposition des collections (livres, revues, ressources numériques accessibles sur 
                                place ou à distance) ainsi que des postes informatiques et des espaces de travail.
                            </p>
                        </div>
                    </div>
                </section>
                <br>
                <section class="restauration, box">
                    <div class="contenu">
                    <img src="ressources/images/restauration.webp" alt="Se restaurer">
                        <div class="texte">
                            <h2>Se restaurer</h2>
                            <p>
                                Les restaurants du CROUS vous permettent de déjeuner pour un tarif social, fixé au plus à 3,30€. 
                                Pour bénéficier de ce tarif il vous suffit de présenter votre carte d'étudiant multiservices.
                            </p>
                            <p>
                                Si vous êtes étudiant boursier, vous bénéficiez automatiquement du repas à 1€ lors du passage en caisse.
                            </p>
                        </div>
                    </div>
                </section>
                <br>
                <section class="fablabs, box">
                    <div class="contenu">
                    <img src="ressources/images/fablabs.webp" alt="Réseau des fablabs de CY Cergy Paris Université">
                        <div class="texte">
                            <h2>Réseau des fablabs de CY Cergy Paris Université</h2>
                            <p>
                                Intégré au Centre d'appui aux enseignements, le réseau des fablabs de CY Cergy Paris Université comprend 
                                le fablabs LabBoite de Cergy (Grand centre) et le Fablab de Gennevilliers (site de l'université). 
                                Ce réseau permet d'expérimenter, tester et échanger dans des lieux collaboratifs, accueillants, 
                                et ouverts à toutes et à tous.
                            </p>
                        </div>
                    </div>
                </section>

            </section>
        </main>
    </section>
</body>
</html>
