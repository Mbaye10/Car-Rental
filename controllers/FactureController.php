<?php

require('../fpdf/fpdf.php');

class PDF extends FPDF {
    function Header() {
        // Logo
        $this->Image('../path/to/logo.png',10,6,30);
        $this->SetFont('Arial','B',12);
        // Title
        $this->Cell(0,10,"PRO AUTO - Achat, Vente & Location d'automobiles",0,1,'C');
        $this->Ln(10);
    }

    function Footer() {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

function generateInvoice($client, $locationDetails, $facturation) {
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);

    // Client Information
    $pdf->Cell(0,10,"Nom: {$client['nom']} Prenom: {$client['prenom']}",0,1);
    $pdf->Cell(0,10,"Tel: {$client['telephone']}",0,1);
    $pdf->Ln(10);

    // Location Details
    $pdf->Cell(0,10,"Vehicule: {$locationDetails['vehicule']}",0,1);
    $pdf->Cell(0,10,"Immatriculation: {$locationDetails['immatriculation']}",0,1);
    $pdf->Cell(0,10,"Lieu de depart: {$locationDetails['lieu_depart']}",0,1);
    $pdf->Cell(0,10,"Destination: {$locationDetails['destination']}",0,1);
    $pdf->Cell(0,10,"Date de depart: {$locationDetails['date_depart']} Heure: {$locationDetails['heure_depart']}",0,1);
    $pdf->Cell(0,10,"Date de retour: {$locationDetails['date_retour']}",0,1);
    $pdf->Ln(10);

    // Facturation
    $pdf->Cell(0,10,"Prix / Jour: {$facturation['prix_jour']} FCFA",0,1);
    $pdf->Cell(0,10,"Nombre de jours: {$facturation['nombre_jours']}",0,1);
    $pdf->Cell(0,10,"Prix total: {$facturation['prix_total']} FCFA",0,1);
    $pdf->Ln(10);

    // Conditions
    $pdf->MultiCell(0,10,"Conditions: \nNB1: Il est formel aux clients de veiller a ce que le conducteur du vehicule ait un permis de conduire valide, sous peine d'etre responsable en cas de probleme.\nNB2: Il est interdit de sous-louer le vehicule sous peine de poursuites.\nNB3: En cas d'accident, le client est tenu de reparer le vehicule sous peine de poursuites judiciaires.");

    // Output the PDF
    $pdf->Output('I', 'facture.pdf');
}

// Example data
$client = ['nom' => 'SOW', 'prenom' => 'OUSSENOU', 'telephone' => '76 925 37 90'];
$locationDetails = ['vehicule' => 'FORD FUSION', 'immatriculation' => 'AA-238-WA', 'lieu_depart' => 'YOFF', 'destination' => 'DAKAR', 'date_depart' => '15/02/2025', 'heure_depart' => '13H', 'date_retour' => '17/02/2025 a 13H'];
$facturation = ['prix_jour' => '50 000', 'nombre_jours' => '2', 'prix_total' => '100 000'];

generateInvoice($client, $locationDetails, $facturation);
