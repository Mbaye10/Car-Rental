<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Clients</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <h1>Gestion des Clients</h1>
    <form action="../controllers/ClientController.php" method="post">
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="prenom" placeholder="Prénom" required>
        <input type="text" name="telephone" placeholder="Téléphone" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Ajouter Client</button>
    </form>
    <h2>Liste des Clients</h2>
    <!-- Code pour afficher la liste des clients -->
</body>
</html>
