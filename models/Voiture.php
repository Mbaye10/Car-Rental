<?php

class Voiture {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function addVoiture($modele, $immatriculation, $annee, $disponibilite) {
        $stmt = $this->pdo->prepare('INSERT INTO voitures (modele, immatriculation, annee, disponibilite) VALUES (?, ?, ?, ?)');
        return $stmt->execute([$modele, $immatriculation, $annee, $disponibilite]);
    }

    public function getVoitures() {
        $stmt = $this->pdo->query('SELECT * FROM voitures');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
