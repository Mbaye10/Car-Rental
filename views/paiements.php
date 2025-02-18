<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Paiements</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <h1>Gestion des Paiements</h1>
    <form action="../controllers/PaiementController.php" method="post">
        <input type="number" name="client_id" placeholder="ID Client" required>
        <input type="number" step="0.01" name="montant" placeholder="Montant" required>
        <input type="date" name="date_paiement" required>
        <button type="submit">Enregistrer Paiement</button>
    </form>
    <h2>Liste des Paiements</h2>
    <!-- Code pour afficher la liste des paiements -->
</body>
</html>
