<?php

class Client {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function addClient($nom, $prenom, $telephone, $email) {
        $stmt = $this->pdo->prepare('INSERT INTO clients (nom, prenom, telephone, email) VALUES (?, ?, ?, ?)');
        return $stmt->execute([$nom, $prenom, $telephone, $email]);
    }

    public function getClients() {
        $stmt = $this->pdo->query('SELECT * FROM clients');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
