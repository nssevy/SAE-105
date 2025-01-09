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
    <link rel="stylesheet" href="ressources/style-contact.css">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); 
        
        ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">

            <h1 class="titre-page">NOUS CONTACTER</h1>

            <?php
            $formStatus = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération et validation des données du formulaire
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $statut = htmlspecialchars($_POST['statut']);
    $message = htmlspecialchars(trim($_POST['message']));

    // Vérification des champs
    if (!empty($email) && !empty($nom) && !empty($prenom) && !empty($statut) && !empty($message)) {
        // Préparation de l'email
        $to = "votre-adresse@mail.com"; // Remplacez par votre adresse email
        $subject = "Nouveau message de contact";
        $body = "Nom : $nom\nPrénom : $prenom\nStatut : $statut\nMessage :\n$message";
        $headers = "From: $email";

        // Tentative d'envoi
        if (mail($email, $nom, $prenom, $statut,$message)) {
            $formStatus = "success"; // Envoi réussi
        } else {
            $formStatus = "error"; // Erreur d'envoi
        }
    } else {
        $formStatus = "incomplete"; // Champs incomplets
    }
}
?>

 <!-- Affichage des messages -->
 <?php if (isset($formStatus)): ?>
        <?php if ($formStatus === "success"): ?>
            <div class="message success">Votre message a été envoyé avec succès !</div>
        <?php elseif ($formStatus === "error"): ?>
            <div class="message error">Une erreur est survenue lors de l'envoi. Veuillez réessayer.</div>
        <?php elseif ($formStatus === "incomplete"): ?>
            <div class="message incomplete">Veuillez remplir tous les champs du formulaire.</div>
        <?php endif; ?>
    <?php endif; ?>



            <h2 class="sous-titre-page">Remplissez notre formulaire</h2>
           
        <form action="contact.php" method="POST" class="form-group">
            
        <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

                <label for="prenom">Prénom :*</label>
                <input type="text" id="prenom" name="prenom" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>  

                <label>Vous êtes :</label>
                <div class="form-align">
                    <div>
                    <input type="radio" id="etudiant" name="statut" value="etudiant" required>
                    <label for="etudiant">Étudiant</label>
</div>

<div>
                    <input type="radio" id="professionnel" name="statut" value="professionnel" required>
                    <label for="professionnel">Professionnel</label></div>

                    <div>
                    <input type="radio" id="lyceen" name="statut" value="lyceen" required>
                    <label for="lyceen">Lycéen</label></div>
                </div>
                    <br>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>
            <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
        </main>
    </section>
</body>
</html>