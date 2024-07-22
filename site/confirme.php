<?php
session_start();

if ($_POST) {
    $nom = isset($_SESSION['nom']) ? $_SESSION['nom'] : '';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
    $quantite_Briques = isset($_SESSION['quantite_Briques']) ? $_SESSION['quantite_Briques'] : 0;
    $quantite_Ciment = isset($_SESSION['quantite_Ciment']) ? $_SESSION['quantite_Ciment'] : 0;
    $quantite_acier = isset($_SESSION['quantite_acier']) ? $_SESSION['quantite_acier'] : 0;
    $quantite_Parpaing = isset($_SESSION['quantite_Parpaing']) ? $_SESSION['quantite_Parpaing'] : 0;
    $quantite_Planches = isset($_SESSION['quantite_Planches']) ? $_SESSION['quantite_Planches'] : 0;
    $prix_total_facture = isset($_SESSION['prix_total_facture']) ? $_SESSION['prix_total_facture'] : 0;

    $db = mysqli_connect('localhost', 'root', '', 'sitephp');

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "INSERT INTO commande (nom, email, Briques, Ciment, acier, Parpaing, Planches, prix_total_facture) 
              VALUES ('$nom', '$email', '$quantite_Briques', '$quantite_Ciment', '$quantite_acier', '$quantite_Parpaing', '$quantite_Planches', '$prix_total_facture')";

    mysqli_query($db, $query);
       
  
    mysqli_close($db);


header('Location: commande.php');
exit;}
?>
