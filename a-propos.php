<?php
    $couleur_bulle_classe="vert";
    $couleur_bordure_classe="vf";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A PROPOS | BUT MMI</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css-élève/style-a-propos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="ressources/css-élève/style-footer.css">
    <link rel="stylesheet" href="ressources/css-élève/style-header-eleve.css?v=<?php echo time(); ?>">
    
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="container">  

            <div class="menu">
                <a href="#presentation">Présentation</a>
                <a href="#sae">SAÉ</a>
                <a href="#exemples-sae">Exemples de SAÉ</a>
            </div>

            <div class="text" id="presentation">
                <p>Le BUT métiers du multimédia et de l'internet (MMI) remplace le DUT MMI à partir de la rentrée 2021, auparavant appelé DUT SRC (services et réseaux de communication) jusqu'en mai 2013, qui était lancé à la rentrée universitaire 1994 par les IUT de Vélizy, Marne-la-Vallée, Saint-Raphaël et Verdun. Ce BUT offre une alternative aux anciens diplômes Bac+3, tels que la licence professionnelle en activités et techniques de communication et la licence professionnelle en systèmes informatiques et logiciels.</p>

                <p>Lorsque cette formation était proposée sous la forme d'un Diplôme Universitaire Technologique (DUT), elle se déroulait sur deux années (1 800 heures). En théorie, elle est accessible à tous les bacheliers, quelle que soit leur série. En moyenne, il y a de 30 à 35 heures de cours par semaine. Cette formation se divise en trois grands pôles, auxquels il faut ajouter le projet tutoré (300 heures) et les stages (420 heures).</p>

                <ul>
                    <li>La culture contemporaine et langues étrangères (500 heures)</li>
                    <li>La culture scientifique et technique (700 heures)</li>
                    <li>La culture communicationnelle (600 heures)</li>
                </ul>

                <img src="ressources/images/IMG_7106.png"
                    srcset="ressources/images/IMG_7106@2x.png"
                    alt="maison">
                
                <p>A CY Cergy Paris Université, il est donné la possibilité aux étudiants de passer un semestre au Québec à l'Université du Québec à Chicoutimi (UQAC) dans une formation dont le contenu est proche de celui proposé à l'IUT. Il est également possible d'effectuer ce semestre après avoir été diplômé. <span class="bold"> Attention : les cours sont dispensés en langue française</span>.</p>

            </div>

            <div class="text" id="sae">

                <h1>Situation d'Apprentissage et d'Évaluation</h1>

                <p>Dans l'optique de préparer au mieux les étudiants à leur future vie professionnelle, les étudiants sont regroupés en agences de communication de 3 à 7 personnes dans des projets appelés "SAÉ" ou Situation d'Apprentissage et d'Évaluation. Ces agences ont pour but d’encourager le travail d'équipe dans un cadre reprenant l'environnement du travail en entreprise.</p>
                
                <p>La situation d'apprentissage et d'évaluation ou simplement SAÉ est la situation didactique que privilégie, au Québec, le Ministère de l'Éducation, Enseignement supérieur et Recherche (MEESR) par le biais du Programme de formation de l'école québécoise (PFEQ). Une SAÉ se définit comme un ensemble constitué d'une ou plusieurs tâches à réaliser par l’élève en vue d’atteindre le but fixé. Elle permet : à l'élève, de développer et d’exercer une ou plusieurs compétences disciplinaires et transversales; à l'enseignant, d’assurer le suivi du développement des compétences dans une perspective d'aide à l'apprentissage. Elle est donc centrée sur l'élève et préconise une approche constructiviste ou socioconstructiviste à l'école.</p>

                <p>Les SAÉ sont une nouveauté des diplômes BUT, <span class="bold">elles visent à remplacer les Devoirs Sur Table et les notes à terme,</span> en proposant une approche plus "ingénieure" de la scolarité avec des étudiants qui apprennent à résoudre des problèmes et non plus apprendre par cœur leurs cours.</p>

            </div>

            <div id="exemples-sae">
                <h1>Exemple de projet réalisés en SAÉ</h1>

                <div class="container_cards">
                    <div class="cards">
                        <img src="ressources/images/Image_de_communication.png" alt="Étudiants travaillant sur un projet ensemble.">
                        <div class="cards_text">
                            <h3>Auditer une communication numérique • SAE 1.01</h3>
                            <p>Comprendre les écosystèmes, les besoins des utilisateurs et les dispositifs de communication numérique</p>
                        </div>
                    </div>

                    <div class="cards">
                        <img src="ressources/images/Recomandation_client.png" alt="Main pointant vers des icônes de visages exprimant des émotions.">
                        <div class="cards_text">
                            <h3>Concevoir une recommandation de communication numérique • SAE 1.02</h3>
                            <p>Concevoir ou co-concevoir une réponse stratégique pertinente à une problématique complexe</p>
                        </div>
                    </div>
                    <div class="cards">
                        <img src="ressources/images/Elements_visuelle.png" alt="Bureau avec ordinateur portable et outils de design.">
                        <div class="cards_text">
                            <h3>Produire les éléments d’une communication visuelle • SAE 1.03</h3>
                            <p>Exprimer un message avec les médias numériques pour informer et communiquer</p>
                        </div>
                    </div>
                    
                    <div class="cards">
                        <img src="ressources/images/Produire_contenu_audio_vidéo.png" alt="Homme utilisant un logiciel de montage vidéo.">
                        <div class="cards_text">
                            <h3>Produire un contenu audio et vidéo • SAE 1.04</h3>
                            <p>Exprimer un message avec les médias numériques pour informer et communiquer</p>
                        </div>
                    </div>

                    <div class="cards">
                        <img src="ressources/images/Produire_un_site_web.png" alt="Éditeur de code avec lignes de programmation visibles.">
                        <div class="cards_text">
                            <h3>Produire un site Web • SAE 1.05</h3>
                            <p>Développer pour le web et les médias numériques</p>
                        </div>
                    </div>

                    <div class="cards">
                        <img src="ressources/images/Communication_digitale.png" alt="Illustration avec icônes de médias numériques.">
                        <div class="cards_text">
                            <h3>Gérer un projet de communication numérique • SAE 1.06</h3>
                            <p>Entreprendre dans le secteur du numérique</p>
                        </div>
                    </div>
                </div>

            </div>

        </main>
    </section>
</body>

<footer>
    <?php require_once('./ressources/includes/footer.php'); ?>
</footer>

</html>