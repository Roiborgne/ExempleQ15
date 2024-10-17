<?php
$Vue->setMenu(new \App\Vue\Vue_Menu_Orage());
$Vue->addToCorps(new \App\Vue\Vue_CalculOrage());

if (isset($_REQUEST['action'] ) && $_REQUEST['action'] == 'Orage') {
    $tempsOrage = $_POST['temps'];
    if ($tempsOrage > 0 ) {
        $distance = $tempsOrage/3;
        $distance = round($distance, 1);
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage($distance." km"));
    } else {
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Vous n'avez pas entrez la bonne valeur"));
    }
}