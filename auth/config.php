<?php


date_default_timezone_set('UTC');


// Current date and time
$datetime = date("Y-m-d H:i:s");

// Convert datetime to Unix timestamp
$timestamp = strtotime($datetime, strtotime("-1 days"));

// Subtract time from datetime
$time = $timestamp - 37;

// Date and time after subtraction
$lastlog = date("d/m/Y H:i:s", $time);

$iconstatut = "fa fa-times";  // Bloqué

$iconstatut = "fa fa-times";  // Actif



//$lastlog = date("d/m/Y H:i:s", strtotime("-1 days"));

/* ulgn=1 -- ID: 51941012073 |mot de pass : 9152078 */


$devise = "€";
$banque = "Crédit Agricole";
$statut = "Bloccato !";
$slogan = "La banca che si muove";
$frais = "Si prega di pagare le spese di sblocco pari a: 275.000 ";




$nom = "Ortiz Jean Claude";
$solde = "430.900,00"; //sans la devise
$mailgest = "Agricolebancacredito@gmail.com";
$nomgest = "Carlo Rocchetta"; // avec indicatif
$telgest = "+39 329 790 4313";
$iban_u1 = "IT45 X030 0203 2803 9272 8824 919";
$montantvir = "2.346.649,00€";
$benftrsf_u1 = "";
$codebank_u1 = "CRPPIT2P595";
$statrsf_u1 = "En cours";


?>
