<?php

session_start();
$id =$_SESSION['id'];
$Briques = $_POST['brique'];
$Ciment = $_POST['ciment'];
$acier = $_POST['acier'];
$Parpaing = $_POST['parpaing'];
$Planches = $_POST['planches'];

$prix_Briques = 6.5;
$prix_Ciment = 80;
$prix_acier  = 23;
$prix_Parpaing = 8;
$prix_Planches= 30;


$prix_total_Briques = $Briques * $prix_Briques;
$prix_total_Ciment = $Ciment * $prix_Ciment;
$prix_total_acier = $Bois * $prix_acier;
$prix_total_Parpaing = $Parpaing * $prix_Parpaing;
$prix_total_Planches = $Planches* $prix_Planchest;


$prix_total_facture = $prix_total_Briques + $prix_total_Ciment + $prix_total_acier + $prix_total_Parpaing + $prix_Planches;

$db = mysqli_connect('localhost', 'root', '', 'sitephp');
$req = "UPDATE commande SET Briques='$Briques', Ciment='$Ciment', acier='$acier' ,Planches='$Planches', Parpaing='$Parpaing',prix_total_facture='$prix_total_facture'WHERE id='$id'";

$resultat = mysqli_query($db, $req);

    
    header("Location: commande.php");

?>