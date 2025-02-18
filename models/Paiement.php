<?php

class Paiement {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function addPaiement($client_id, $montant, $date_paiement) {
        $stmt = $this->pdo->prepare('INSERT INTO paiements (client_id, montant, date_paiement) VALUES (?, ?, ?)');
        return $stmt->execute([$client_id, $montant, $date_paiement]);
    }

    public function getPaiements() {
        $stmt = $this->pdo->query('SELECT * FROM paiements');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
