<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Voitures</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <h1>Gestion des Voitures</h1>
    <form action="../controllers/VoitureController.php" method="post">
        <input type="text" name="modele" placeholder="Modèle" required>
        <input type="text" name="immatriculation" placeholder="Immatriculation" required>
        <input type="number" name="annee" placeholder="Année" required>
        <select name="disponibilite">
            <option value="1">Disponible</option>
            <option value="0">Indisponible</option>
        </select>
        <button type="submit">Ajouter Voiture</button>
    </form>
    <h2>Liste des Voitures</h2>
    <!-- Code pour afficher la liste des voitures -->
</body>
</html>
