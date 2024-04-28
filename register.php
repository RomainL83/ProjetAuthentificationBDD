<!DOCTYPE html>
<html>

<head>
    <title>Inscription</title>
</head>

<body>
    <h2>Inscription</h2>
    <form action="registerPost.php" method="POST">
        <label for="name">Nom :</label>
        <input type="text" name="name"><br><br>

        <label for="surname">Prénom :</label>
        <input type="text" name="surname"><br><br>

        <label for="pseudo">Pseudo :</label>
        <input type="text" name="pseudo"><br><br>

        <label for="email">Adresse email :</label>
        <input type="email" name="email" required><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="S’inscrire">
    </form>
</body>

</html>