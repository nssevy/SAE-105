<?php
    $couleur_bulle_classe = "jaune";
    $couleur_bordure_classe="orange";
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
    <link rel="stylesheet" href="ressources/css-élève/style-contact.css">
    <link rel="stylesheet" href="ressources/css-élève/style-footer.css">
      <link rel="stylesheet" href="ressources/css-élève/style-header-eleve.css?v=<?php echo time(); ?>">
</head>

<body>
<section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); 
        
        ?>
      <main>
    <?php

    // Gestion des messages de confirmation ou d'erreur //
    $error = $success = '';
    $prenom = $nom = $email = $message = $type = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Lien des données php en html //
        $prenom = trim($_POST["prenom"]);
        $nom = trim($_POST["nom"]);
        $email = trim($_POST["email"]);
        $message = trim($_POST["message"]);
        $type = isset($_POST["type"]) ? $_POST["type"] : '';

    // Vérification que tous les champs sont remplis //
    if (empty($prenom) || empty($nom) || empty($email) || empty($message) || empty($type)) {
            $error = "L'envoi du message a échoué. Veuillez remplir tous les champs.";
        } 
        
    // Vérification de l'email //
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            $error = "L'adresse email n'est pas valide.";
        } else {
            
    // Envoi du mail si tout est valide //
            $to = "fily.toure3@etu.cyu.fr"; // mail de réception des messages
            $subject = "Message depuis le site BUT MMI";
            $body = "Prénom : $prenom\nNom : $nom\nEmail : $email\nType : $type\nMessage :\n$message";

    // Envoi du mail //
    if (mail($to, $subject, $body)) {
                $success = "Votre message a bien été envoyé.";
                
    // Réinitialisation des champs après envoi du mail //
                $prenom = $nom = $email = $message = $type = '';
            } else {
                $error = "L'envoi du message a échoué. Veuillez réessayer.";
            }
        }
    }
    ?>

    <!-- Paramétrage des messages d'erreur ou de confirmation -->
    <?php if ($error): ?>
        <div class="error-banner"><?php echo $error; ?></div>
    <?php elseif ($success): ?>
        <div class="success-banner"><?php echo $success; ?></div>
    <?php endif; ?>

    <!-- Contenu principal haut du formulaire -->
    <h1>Plus d'infos sur la formation ? </h1>
    <br>
    <h1>Contactez-nous !</h1>
    <br>

    <p class="texte"> 
        <span class="gras">La formation s'ouvre à tous les bacheliers.</span> 
        Avoir des connaissances en programmation, design ou audiovisuel est un atout, car il faut de la curiosité dans cette formation pluridisciplinaire. 
        <span class="gras">Il est également possible de faire la formation après une reprise d'études ou une réorientation.</span>
    </p>

    <div class="en-ligne">
        <h1>Nous contacter en ligne</h1><br>
    </div>

    <!-- Formulaire de contact -->
    <div class="bloc-texte">
    
    <form method="POST" action="">
        <label for="prenom">Prénom*</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo htmlspecialchars($prenom); ?>">

        <label for="nom">Nom de famille*</label>
        <input type="text" id="nom" name="nom" value="<?php echo htmlspecialchars($nom); ?>">

        <label for="email">Adresse e-mail*</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">

        <label for="message">Message*</label>
        <textarea id="message" name="message"><?php echo htmlspecialchars($message); ?></textarea>

        <label>Je suis :</label>

    <div class="form-radio">

        <label><input type="radio" name="type" value="Etudiant" <?php echo ($type == 'Etudiant') ? 'checked' : ''; ?>> Étudiant / Étudiante</label>
        <label><input type="radio" name="type" value="Parent" <?php echo ($type == 'Parent') ? 'checked' : ''; ?>> Parent</label>
        <label><input type="radio" name="type" value="Autre" <?php echo ($type == 'Autre') ? 'checked' : ''; ?>> Autre</label>

    </div>

        <button type="submit">ENVOYER</button><br>
        
    </form>
    </div>

    <!-- Pied de form -->

    <div class="courrier">

        <h1>Nous contacter par courrier</h1><br>

        <p class="texte">IUT de Cergy-Pontoise<br>
        Département Métiers du Multimédia et de l'Internet<br>
        34 Bis Boulevard Henri Bergson<br>
        95200 Sarcelles</p>

    </div>

    </main>
    <footer>

        <?php require_once('./ressources/includes/footer.php'); ?>

    </footer>
</body>

</html>