<?php
    $couleur_bulle_classe= "marron";
    $couleur_bordure_classe="marronfonce";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css-élève/style-faq.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="ressources/css-élève/style-footer.css">

</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
            <div class="part-1">
                <div class="question-reponse">
                    <h1>Questions & Réponses</h1>
                    <p>Sur notre site, nous mettons à votre disposition un espace interactif où nos visiteurs peuvent poser des questions et partager leurs réponses. Ce service permet d’obtenir des informations précises et détaillées grâce aux contributions de notre communauté.</p>
                </div>

                <div class="choisis-theme">
                    <h2>Choisissez un thème :</h2>
                    <div class="menu">
                        <a href="#index1">Le programme est-il un programme national ?</a>
                        <a href="#index2">Quelles sont les compétences principales du B.U.T. MMI ?</a>
                        <a href="#index3">Quels enseignements sont proposés ?</a>
                        <a href="#index4">Qui forme les étudiants ?</a>
                        <a href="#index5">Combien y-a-t-il d’heures de cours ?</a>
                    </div>
                </div>
            </div>

            <div class="part-2">

                <div class="component" id="index1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1007" height="2" viewBox="0 0 1007 2" fill="none">
                    <path d="M0 1H1007" stroke="#BBBBBB"stroke-width="1.5"/>
                    </svg>
                    <div class="frame">
                        <h2>Le programme est-il un programme national ?</h2>
                        <p>Le B.U.T. est un diplôme national.
                        Chaque IUT peut adapter les enseignements aux enjeux locaux pour 30% du volume global.</p>
                    </div>
                </div>

                <div class="component" id="index2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1007" height="2" viewBox="0 0 1007 2" fill="none">
                    <path d="M0 1H1007" stroke="#BBBBBB"stroke-width="1.5"/>
                    </svg>
                    <div class="frame">
                        <h2>Quelles sont les compétences principales du B.U.T. MMI ?</h2>
                        <p>Le B.U.T. MMI repose sur cinq blocs de compétences principales. Tout d'abord, il permet de comprendre les enjeux de communication et les besoins des utilisateurs. Les étudiants apprennent ensuite à concevoir des produits ou des services adaptés. Ils sont également formés à exprimer des messages à travers les médias numériques et à développer des solutions pour le web et ces mêmes médias. Enfin, ce cursus encourage les étudiants à entreprendre dans le secteur du numérique.</p>
                    </div>
                </div>

                <div class="component" id="index3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1007" height="2" viewBox="0 0 1007 2" fill="none">
                    <path d="M0 1H1007" stroke="#BBBBBB"stroke-width="1.5"/>
                    </svg>
                    <div class="frame">
                        <h2>Quels enseignements sont proposés ?</h2>
                        <p>Les cinq blocs de compétences incluent divers enseignements. Par exemple, les étudiants suivent des cours sur l’ergonomie, l’audit de site web, ainsi que l’économie et la sociologie des usages. Ils approfondissent leurs connaissances en communication et marketing et explorent des domaines créatifs comme la création graphique, l’animation, l’audiovisuel et l’écriture multimédia. Sur le plan technique, ils apprennent l’intégration web, la programmation, l’hébergement et la sécurité. En outre, des enseignements en gestion de projet, création et gestion d’entreprises, et droit complètent le programme.</p>
                    </div>
                </div>

                <div class="component" id="index4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1007" height="2" viewBox="0 0 1007 2" fill="none">
                    <path d="M0 1H1007" stroke="#BBBBBB"stroke-width="1.5"/>
                    </svg>
                    <div class="frame">
                        <h2>Qui forme les étudiants ?</h2>
                        <p>Les étudiants bénéficient d’une formation dispensée par des équipes pluridisciplinaires. Ces équipes sont composées d’enseignants, d’enseignants-chercheurs et de professionnels du secteur du web, offrant un équilibre entre théorie et pratique.</p>
                    </div>
                </div>

                <div class="component" id="index5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1007" height="2" viewBox="0 0 1007 2" fill="none">
                    <path d="M0 1H1007" stroke="#BBBBBB"stroke-width="1.5"/>
                    </svg>
                    <div class="frame">
                        <h2>Combien y-a-t-il d’heures de cours ?</h2>
                        <p>Le B.U.T. MMI correspond à un total de 2000 heures d’enseignement et 600 heures de projet, répartis sur trois ans. Cela représente en moyenne 33 heures de cours par semaine, ce qui permet une formation intensive et complète.</p>
                    </div>
                </div>

            </div>

            <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
        </main>
    </section>
</body>

<footer>
    <?php require_once('./ressources/includes/footer.php'); ?>
</footer>

</html>