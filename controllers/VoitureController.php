<?php

require_once '../config/database.php';
require_once '../models/Voiture.php';

class VoitureController {
    private $voitureModel;

    public function __construct($pdo) {
        $this->voitureModel = new Voiture($pdo);
    }

    public function addVoiture($modele, $immatriculation, $annee, $disponibilite) {
        return $this->voitureModel->addVoiture($modele, $immatriculation, $annee, $disponibilite);
    }

    public function getVoitures() {
        return $this->voitureModel->getVoitures();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $modele = $_POST['modele'];
    $immatriculation = $_POST['immatriculation'];
    $annee = $_POST['annee'];
    $disponibilite = $_POST['disponibilite'];

    $voitureController = new VoitureController($pdo);
    $voitureController->addVoiture($modele, $immatriculation, $annee, $disponibilite);
    
    header('Location: ../views/voitures.php');
    exit;
}

// Exemple d'utilisation
$voitureController = new VoitureController($pdo);
$voitures = $voitureController->getVoitures();
foreach ($voitures as $voiture) {
    echo $voiture['modele'] . ' ' . $voiture['immatriculation'] . "<br>";
}
