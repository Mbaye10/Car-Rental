<?php

require_once '../config/database.php';
require_once '../models/Paiement.php';

class PaiementController {
    private $paiementModel;

    public function __construct($pdo) {
        $this->paiementModel = new Paiement($pdo);
    }

    public function addPaiement($client_id, $montant, $date_paiement) {
        return $this->paiementModel->addPaiement($client_id, $montant, $date_paiement);
    }

    public function getPaiements() {
        return $this->paiementModel->getPaiements();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $client_id = $_POST['client_id'];
    $montant = $_POST['montant'];
    $date_paiement = $_POST['date_paiement'];

    $paiementController = new PaiementController($pdo);
    $paiementController->addPaiement($client_id, $montant, $date_paiement);
    
    header('Location: ../views/paiements.php');
    exit;
}

// Exemple d'utilisation
$paiementController = new PaiementController($pdo);
$paiements = $paiementController->getPaiements();
foreach ($paiements as $paiement) {
    echo $paiement['montant'] . ' ' . $paiement['date_paiement'] . "<br>";
}
