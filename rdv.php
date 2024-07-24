<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $full_name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $appointment_date = htmlspecialchars($_POST['appointment_date']);
    $appointment_time = htmlspecialchars($_POST['appointment_time']);
    $appointment_type = htmlspecialchars($_POST['appointment_type']);
    $comments = htmlspecialchars($_POST['comments']);

    // Traitement des données (par exemple, envoi d'un email ou enregistrement dans une base de données)
    // Ici, nous affichons simplement les données pour la démonstration
    echo "<h1>Rendez-vous pris</h1>";
    echo "<p>Nom complet : $full_name</p>";
    echo "<p>Email : $email</p>";
    echo "<p>Téléphone : $phone</p>";
    echo "<p>Date : $appointment_date</p>";
    echo "<p>Heure : $appointment_time</p>";
    echo "<p>Type : $appointment_type</p>";
    echo "<p>Commentaires : $comments</p>";
}


$html = <<<HTML
<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="style.css" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prise de rendez-vous</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois+Shadow&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<html>
        <head>
            <meta charset="utf-8" />
            <title>Raccaccoonie tatoo !</title>
            <link rel="stylesheet" href="style.css" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois+Shadow&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

        </head>

        <header>
            <div class="title">
                <h1> RACCACCOONIE </h1>
            </div>
            <div class="title2">
                <h2>Tatoo</h2>
            </div>
            <div class="menu">
                <a href="index.html "> <p>Accueil</p> </a>
                <a href="index.html#pres"> <div id="pres"> <p>Mickael <br>
                        Raccaccoonie </p> </div></a>
                <a href="index.html#pres"> <div> <p>Hand Poke</p></div> </a>  <!--penser à mettre les ancres-->
                <a href=" " > <div> <p>Flash</p> </div></a>
            <form action="rdv.php" method="get">
            <a href="rdv.php"> <p>Rendez-vous</p></a>
            </form>
                <a href=" " ><div> <p>Tarifs</p> </div></a>
            </div>
        </header>
<body>
    <div class="container">
        <h1>Prise de rendez-vous</h1>
        <!-- Formulaire de prise de rendez-vous -->
        <form action="submit_appointment.php" method="post">
            <!-- Champ pour le nom complet -->
            <label for="full_name">Nom complet:</label>
            <input type="text" id="full_name" name="full_name" required>
            
            <!-- Champ pour le pronom -->
            <label for="full_name">Ton pronom:</label>
            <input type="text" id="full_name" name="full_name" required>

            <!-- Champ pour l'adresse email -->
            <label for="email">Adresse email:</label>
            <input type="email" id="email" name="email" required>
            
            <!-- Champ pour le numéro de téléphone -->
            <label for="phone">Numéro de téléphone:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <!-- Champ pour la date du rendez-vous -->
            <label for="appointment_date">Date du rendez-vous:</label>
            <input type="date" id="appointment_date" name="appointment_date" required>
            
            <!-- Champ pour l'heure du rendez-vous -->
            <label for="appointment_time">Heure du rendez-vous:</label>
            <input type="time" id="appointment_time" name="appointment_time" required>

            <!-- Champ pour les préférences de discussion -->
            <label for="appointment_type">Préférences pour le rendez-vous:</label>
            <select id="appointment_type" name="appointment_type" required>
                <option value="consultation">J'adore blablater !</option>
                <option value="suivi">J'aime discuter mais je suis timide, mets moi à l'aise</option>
                <option value="autre">Je n'aime pas trop parler</option>
                <option value="autre">On verra sur place selon mon mood</option>
            </select>

            <!-- Champ pour les préférences de son -->
            <label for="appointment_type">Préférences pour l'ambiance:</label>
            <select id="appointment_type" name="appointment_type" required>
                <option value="consultation">J'arrive avec ma propre playlist </option>
                <option value="suivi">Choisis la musique maestro  !</option>
                <option value="autre">Ecoutons un podcast !</option>
                <option value="autre">Sans musique pour moi</option>
                <option value="autre">On verra sur place selon mon mood</option>
            </select>

            <!-- Champ pour les commentaires supplémentaires -->
            <label for="comments">Commentaires (trigger, sujets sensibles, détails...):</label>
            <textarea id="comments" name="comments" rows="4"></textarea>

            <!-- Bouton pour soumettre le formulaire -->
            <button type="submit">Prendre rendez-vous</button>
        </form>
    </div>
</body>
</html>
HTML;

echo $html;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $full_name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $appointment_date = htmlspecialchars($_POST['appointment_date']);
    $appointment_time = htmlspecialchars($_POST['appointment_time']);
    $appointment_type = htmlspecialchars($_POST['appointment_type']);
    $comments = htmlspecialchars($_POST['comments']);

    // Traitement des données (par exemple, envoi d'un email ou enregistrement dans une base de données)
    // Ici, nous affichons simplement les données pour la démonstration
    echo "<h1>Rendez-vous pris</h1>";
    echo "<p>Nom complet : $full_name</p>";
    echo "<p>Email : $email</p>";
    echo "<p>Téléphone : $phone</p>";
    echo "<p>Date : $appointment_date</p>";
    echo "<p>Heure : $appointment_time</p>";
    echo "<p>Type : $appointment_type</p>";
    echo "<p>Commentaires : $comments</p>";
}


?>


