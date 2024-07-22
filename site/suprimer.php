<?php
session_start();

$brique=$_SESSION['brique'];
       
$ciment=$_SESSION['ciment'];

$acier=$_SESSION['acier'];
$parpaing=$_SESSION['Parpaing'];
$planches=$_SESSION['Planches'];
$prix=$_SESSION['prix'];
if(isset($_GET['id'])){
    $id = $_GET['id'];
       
        $db = mysqli_connect('localhost', 'root', '', 'sitephp');
       
            
            $requet = mysqli_query($db, "DELETE FROM commande WHERE id='$id'");
        }

       

    
    header("Location:commande.php");
       
?>