<?php
    $couleur_bulle_classe = "xxx";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT | BUT MMI</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="style-contact.css">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); 
        
        ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
            <h1 class="titre-page">CONTACT</h1>
            <h2>Contactez-nous</h2>
        <form action="contact.php" method="POST">
            <div class="form-group">
                <label for="email">Adresse Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label>Statut :</label>
                <div>
                    <input type="radio" id="etudiant" name="statut" value="etudiant" required>
                    <label for="etudiant">Étudiant</label>
                </div>
                <div>
                    <input type="radio" id="professionnel" name="statut" value="professionnel" required>
                    <label for="professionnel">Professionnel</label>
                </div>
                <div>
                    <input type="radio" id="lyceen" name="statut" value="lyceen" required>
                    <label for="lyceen">Lycéen</label>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </div>
            <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
        </main>
    </section>
</body>
</html>