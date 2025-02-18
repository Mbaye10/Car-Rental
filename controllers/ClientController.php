<?php

require_once '../config/database.php';
require_once '../models/Client.php';

class ClientController {
    private $clientModel;

    public function __construct($pdo) {
        $this->clientModel = new Client($pdo);
    }

    public function addClient($nom, $prenom, $telephone, $email) {
        return $this->clientModel->addClient($nom, $prenom, $telephone, $email);
    }

    public function getClients() {
        return $this->clientModel->getClients();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];

    $clientController = new ClientController($pdo);
    $clientController->addClient($nom, $prenom, $telephone, $email);
    
    header('Location: ../views/clients.php');
    exit;
}

// Exemple d'utilisation
$clientController = new ClientController($pdo);
$clients = $clientController->getClients();
foreach ($clients as $client) {
    echo $client['nom'] . ' ' . $client['prenom'] . "<br>";
}
