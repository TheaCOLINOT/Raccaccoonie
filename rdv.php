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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prise de rendez-vous</title>

</head>
<body>
    <div class="container">
        <h1>Prise de rendez-vous</h1>
        <!-- Formulaire de prise de rendez-vous -->
        <form action="submit_appointment.php" method="post">
            <!-- Champ pour le nom complet -->
            <label for="full_name">Nom complet:</label>
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

            <!-- Champ pour le type de rendez-vous -->
            <label for="appointment_type">Type de rendez-vous:</label>
            <select id="appointment_type" name="appointment_type" required>
                <option value="consultation">Consultation</option>
                <option value="suivi">Suivi</option>
                <option value="autre">Autre</option>
            </select>

            <!-- Champ pour les commentaires supplémentaires -->
            <label for="comments">Commentaires:</label>
            <textarea id="comments" name="comments" rows="4"></textarea>

            <!-- Bouton pour soumettre le formulaire -->
            <button type="submit">Prendre rendez-vous</button>
        </form>
    </div>
</body>
</html>
HTML;


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