<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    body{
            
        }
        table ,tr,td{
            width:1000px;
            border-collapse:collapse;
            border:1px solid rgba(219, 106, 57, 0.582);
            text-align:left;
            padding:8px 8px;
  
        }
        
         .contenu {
            max-width: 1000px;
            margin: 35px ;
            padding: 10px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color:rgba(219, 106, 57, 0.582)
        }
        button{ background-color:rgba(219, 106, 57, 0.582);
      border-radius:20px;
     font-size:20px;

      border:none;}
a{   text-decoration:none;
    color:black;}
   </style>
</head>
<body>
<section> <button><a href="acceuil.php">retour</a> </button></section>
    <h1>Liste des commandes</h1>
<?php
session_start();


$nom=$_SESSION['nom'];
$email=$_SESSION['email'];


$db=mysqli_connect('localhost','root','','sitephp');
    $query = mysqli_query ($db,"select * from commande where nom='$nom' and email='$email'");
    while($row=mysqli_fetch_assoc($query)){

?>

    <div class="contenu">
    <table>
        <tr>
        <td>Briques</td>
        <td>Ciment</td>
        <td>Acier nervuré</td>
        <td>Parpaing</td>
        <td>Planches </td>
        <td>Prix total facture</td> 
        <td>Changement</td>
        <td>Date reservation</td>
        </tr>
        <tr>
        <td><?=$row['Briques']?></td>
        <td><?=$row['Ciment']?></td>
        <td><?=$row['acier']?></td>
        <td><?=$row['Parpaing']?></td>
        <td><?=$row['Planches']?></td>
        <td><?=$row['prix_total_facture']?></td>
        <td><a href ="modifier.php?id=<?= $row['id'] ?>">Modifier</a> <a href ="suprimer.php?id=<?= $row['id'] ?>">Supprimer</a></td>
      
        </tr>
        
    </table>
    </div>
    <?php
    
    }
        ?>

    
</body>
</html>