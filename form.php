<!DOCTYPE html>
<html>
<head>
    <title>Formulaire en PHP/MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Formulaire de contact</h2>
        <form method="post" action="traitement.php">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Entrer votre Nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Entrer votre E-mail" required>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" placeholder="Ecrivez votre message ici" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
</body>
</html>
